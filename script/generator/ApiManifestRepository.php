<?php

declare(strict_types=1);

namespace AdOceanSdk\Script\Generator;

use RuntimeException;

final class ApiManifestRepository
{
    public function __construct(private readonly string $manifestPath)
    {
    }

    public function load(): array
    {
        if (!file_exists($this->manifestPath)) {
            return [];
        }

        $manifest = include $this->manifestPath;

        return is_array($manifest) ? $manifest : [];
    }

    public function save(array $entries): void
    {
        ksort($entries);

        $directory = dirname($this->manifestPath);
        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new RuntimeException("Unable to create manifest directory: {$directory}");
        }

        $content = "<?php\n\nreturn " . var_export($entries, true) . ";\n";
        file_put_contents($this->manifestPath, $content);
    }

    public function upsert(string $apiName, array $entry): void
    {
        $entries = $this->load();
        $entries[$apiName] = $entry;

        $this->save($entries);
    }
}