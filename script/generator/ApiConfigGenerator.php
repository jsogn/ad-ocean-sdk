<?php

declare(strict_types=1);

namespace AdOceanSdk\Script\Generator;

require_once __DIR__ . '/ApiManifestRepository.php';

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;

final class ApiConfigGenerator
{
    public function __construct(
        private readonly string $srcRoot,
        private readonly ?string $manifestPath = null,
    ) {
    }

    public function generate(string $outputFile): void
    {
        $directory = dirname($outputFile);
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new RuntimeException("Unable to create output directory: {$directory}");
        }

        file_put_contents($outputFile, $this->render($this->buildEntries()));
    }

    public function buildEntries(): array
    {
        $entries = $this->scanApiEntries();

        if ($this->manifestPath !== null) {
            $manifestEntries = (new ApiManifestRepository($this->manifestPath))->load();
            foreach ($manifestEntries as $apiName => $entry) {
                $entries[$apiName] = $entry;
            }
        }

        ksort($entries);

        return $entries;
    }

    private function scanApiEntries(): array
    {
        $entries = [];
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->srcRoot));

        foreach ($iterator as $file) {
            if ($file->isDir()) {
                continue;
            }

            $filePath = str_replace('\\', '/', $file->getPathname());
            if (pathinfo($filePath, PATHINFO_EXTENSION) !== 'php' || !str_contains($filePath, '/Api/')) {
                continue;
            }

            $meta = $this->extractApiMetadata($filePath);
            if ($meta === null) {
                continue;
            }

            $className = substr($meta['class'], strrpos($meta['class'], '\\') + 1);
            $entries['open' . $className] = [
                'desc' => $meta['desc'],
                'doc' => $meta['doc'],
                'call' => $meta['class'],
                'params' => $this->resolveCompanionClass($meta['class'], 'Params'),
                'response' => $this->resolveCompanionClass($meta['class'], 'Response'),
            ];
        }

        return $entries;
    }

    private function extractApiMetadata(string $filePath): ?array
    {
        $namespace = null;
        $className = null;
        $desc = '';
        $doc = '';

        $handle = fopen($filePath, 'r');
        if ($handle === false) {
            throw new RuntimeException("Unable to read file: {$filePath}");
        }

        while (($line = fgets($handle)) !== false) {
            if ($namespace === null && preg_match('/^namespace\s+(.+);/', $line, $matches) === 1) {
                $namespace = trim($matches[1]);
            }

            if (preg_match('/\*\s+@desc\s+(.+)/', $line, $matches) === 1) {
                $desc = trim($matches[1]);
            }

            if (preg_match('/\*\s+@doc\s+(.+)/', $line, $matches) === 1) {
                $doc = trim($matches[1]);
            }

            if (preg_match('/^class\s+(\w+)/', $line, $matches) === 1) {
                $className = trim($matches[1]);
                break;
            }
        }

        fclose($handle);

        if ($namespace === null || $className === null || !str_ends_with($className, 'Api')) {
            return null;
        }

        return [
            'class' => $namespace . '\\' . $className,
            'desc' => $desc,
            'doc' => $doc,
        ];
    }

    private function resolveCompanionClass(string $apiClass, string $target): string
    {
        $targetClass = str_replace('\\Api\\', '\\' . $target . '\\', $apiClass);
        $targetClass = preg_replace('/Api$/', $target, $targetClass) ?: $targetClass;

        $relativePath = str_replace('AdOceanSdk\\', '', $targetClass);
        $filePath = rtrim($this->srcRoot, '/') . '/' . str_replace('\\', '/', $relativePath) . '.php';

        if (file_exists($filePath)) {
            return $targetClass;
        }

        return $target === 'Params' ? 'AdOceanSdk\\RequestParams' : 'AdOceanSdk\\RequestResponse';
    }

    private function render(array $entries): string
    {
        $result = "<?php\n\nreturn [\n";

        foreach ($entries as $apiName => $entry) {
            $desc = $this->normalizeCommentText((string) ($entry['desc'] ?? ''));
            $doc = $this->normalizeCommentText((string) ($entry['doc'] ?? ''));
            $call = ltrim((string) ($entry['call'] ?? 'AdOceanSdk\\RequestApi'), '\\');
            $params = ltrim((string) ($entry['params'] ?? 'AdOceanSdk\\RequestParams'), '\\');
            $response = ltrim((string) ($entry['response'] ?? 'AdOceanSdk\\RequestResponse'), '\\');

            $result .= "    /**\n";
            $result .= "    * @desc {$desc}\n";
            $result .= "    * @doc  {$doc}\n";
            $result .= "    **/\n";
            $result .= "    '" . $apiName . "' => [\n";
            $result .= "        'desc' => " . var_export((string) ($entry['desc'] ?? ''), true) . ",\n";
            $result .= "        'doc' => " . var_export((string) ($entry['doc'] ?? ''), true) . ",\n";
            $result .= "        'call' => {$call}::class,\n";
            $result .= "        'params' => {$params}::class,\n";
            $result .= "        'response' => {$response}::class,\n";
            $result .= "    ],\n";
        }

        return $result . "];\n";
    }

    private function normalizeCommentText(string $text): string
    {
        return trim(str_replace(["\r", "\n"], ' ', $text));
    }
}