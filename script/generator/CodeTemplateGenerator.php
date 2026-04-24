<?php

declare(strict_types=1);

namespace AdOceanSdk\Script\Generator;

require_once __DIR__ . '/ApiManifestRepository.php';

use RuntimeException;

final class CodeTemplateGenerator
{
    private array $typeMapping;

    private array $writtenFiles = [];

    private array $generatedDataClasses = [];

    public function __construct(
        private readonly string $outputRoot,
        private readonly string $templateRoot,
        ?array $typeMapping = null,
        private readonly ?string $manifestPath = null,
        private readonly string $namingStrategy = 'legacy',
        private readonly bool $cleanupStale = true,
        private readonly bool $writeIfChangedOnly = true,
    ) {
        $this->typeMapping = $typeMapping ?? require dirname(__DIR__) . '/config/type_mapping.php';

        if (!in_array($this->namingStrategy, ['legacy', 'hash'], true)) {
            throw new RuntimeException("Unsupported naming strategy: {$this->namingStrategy}");
        }
    }

    public function generateFromDoc(array $docData, string $classInput): void
    {
        $this->writtenFiles = [];
        $this->generatedDataClasses = [];

        $requestParams = $docData['request_params'] ?? [];
        $responseParams = $docData['response_params'] ?? [];

        $classInput .= ucfirst(strtolower($docData['request_method'] ?? ''));
        $classPaths = explode('/', $classInput);
        $classPrefix = array_pop($classPaths);
        $classNameSpace = 'AdOceanSdk\\' . implode('\\', $classPaths);
        $apiName = 'open' . $classPrefix . 'Api';
        $previousManifestEntry = $this->loadManifestEntry($apiName);

        $this->generateParamClass($classNameSpace, $classPrefix, $requestParams);
        $this->generateResponseClass($classNameSpace, $classPrefix, $responseParams);
        $this->generateApiClass($classNameSpace, $classPrefix, $docData);

        $this->persistManifest($classNameSpace, $classPrefix, $docData);
        $this->cleanupStaleFiles($previousManifestEntry['generated_files'] ?? [], $this->writtenFiles);
    }

    private function generateApiClass(string $classNameSpace, string $classPrefix, array $data): void
    {
        $classPrefix = trim($classPrefix);
        $className = $classPrefix . 'Api';
        $namespace = "{$classNameSpace}\\Api";
        $responseClass = "\\{$classNameSpace}\\Response\\{$classPrefix}Response";
        $paramsClass = "\\{$classNameSpace}\\Params\\{$classPrefix}Params";
        $address = ltrim((string) preg_replace('/^https?:\/\/[^\/]+/', '', $data['request_url']), '/');

        $code = $this->renderTemplate('api.php.tpl', [
            'namespace' => $namespace,
            'className' => $className,
            'parentClass' => 'RequestApi',
            'requestTitle' => $data['request_title'],
            'requestDoc' => $data['request_doc'],
            'address' => $address,
            'method' => $data['request_method'],
            'paramsClass' => $paramsClass,
            'responseClass' => $responseClass,
        ]);

        $this->writeFile("{$classNameSpace}/Api/{$classPrefix}Api.php", $code);
    }

    private function generateResponseClass(string $classNameSpace, string $classPrefix, array $params): void
    {
        $classPrefix = trim($classPrefix);
        $data = ['data' => $params['data'] ?? []];
        $returnType = "\\{$classNameSpace}\\Data\\{$classPrefix}ResponseData";
        $fields = $this->generateFields($classNameSpace, $classPrefix . 'Response', $data, []);
        $returnDocBlock = '';

        if (in_array($params['data']['type'] ?? null, ['list', 'object[]', 'json[]'], true)) {
            $docType = $returnType;
            $returnType = $this->generatePhpType($data['data']['type']);
            $returnDocBlock = <<<DOC
    /**
     * @return array<{$docType}>
     */
DOC;
            $returnDocBlock .= "\n";
        }

        $code = $this->renderTemplate('response.php.tpl', [
            'namespace' => "{$classNameSpace}\\Response",
            'className' => "{$classPrefix}Response",
            'fields' => $fields,
            'returnDocBlock' => $returnDocBlock,
            'returnType' => $returnType,
        ]);

        $this->writeFile("{$classNameSpace}/Response/{$classPrefix}Response.php", $code);
    }

    private function generateParamClass(string $classNameSpace, string $classPrefix, array $params): void
    {
        $classPrefix = trim($classPrefix);
        $fields = $this->generateFields($classNameSpace, $classPrefix . 'Param', $params, []);

        $code = $this->renderTemplate('params.php.tpl', [
            'namespace' => "{$classNameSpace}\\Params",
            'className' => "{$classPrefix}Params",
            'fields' => $fields,
        ]);

        $this->writeFile("{$classNameSpace}/Params/{$classPrefix}Params.php", $code);
    }

    private function generateFields(string $classNameSpace, string $rootClassPrefix, array $params, array $pathSegments): string
    {
        $rootClassPrefix = trim($rootClassPrefix);
        $code = '';

        foreach ($params as $key => $param) {
            $varType = $this->generatePhpType($param['type']);
            $docType = $varType;
            $propertyName = '$' . $key;

            if ($key === 'page_info') {
                $code .= "\n    /**\n"
                    . "     * @var \\AdOceanSdk\\ResponsePageInfoData {$propertyName} 分页信息\n"
                    . "     */\n"
                    . "    public \\AdOceanSdk\\ResponsePageInfoData {$propertyName};\n";
                continue;
            }

            if (in_array($param['type'], ['string[]', 'number[]'], true)) {
                $tipType = $this->generatePhpType(rtrim($param['type'], '[]'));
                $docType = "array<{$tipType}>";
            }

            if (!empty($param['children'])) {
                $childPathSegments = $pathSegments;
                if (!((int) $param['level'] === 0 && $key === 'data')) {
                    $childPathSegments[] = $this->toCamelCase($key);
                }

                $dataClassPrefix = $this->buildDataClassPrefix($rootClassPrefix, $childPathSegments);
                $typeClass = "\\{$classNameSpace}\\Data\\{$dataClassPrefix}Data";

                $typeClass = trim($typeClass);
                $docType = $typeClass;

                if ($varType === 'array') {
                    $docType = "array<{$typeClass}>";
                } else {
                    $varType = $typeClass;
                }

                $this->generateDataClass($classNameSpace, $rootClassPrefix, $childPathSegments, $param['children'], $param['description']);
            }

            $code .= "\n    /**\n"
                . "     * @var {$docType} {$propertyName} {$param['description']}\n"
                . "     */\n"
                . "    public {$varType} {$propertyName};\n";
        }

        return $code === '' ? $code : $code . "\n";
    }

    private function generateDataClass(string $classNameSpace, string $rootClassPrefix, array $pathSegments, array $params, string $desc = ''): void
    {
        $classPrefix = $this->buildDataClassPrefix(trim($rootClassPrefix), $pathSegments);
        if (isset($this->generatedDataClasses[$classPrefix])) {
            return;
        }

        $this->generatedDataClasses[$classPrefix] = true;
        $fields = $this->generateFields($classNameSpace, trim($rootClassPrefix), $params, $pathSegments);

        $code = $this->renderTemplate('data.php.tpl', [
            'namespace' => "{$classNameSpace}\\Data",
            'className' => "{$classPrefix}Data",
            'description' => $desc,
            'fields' => $fields,
        ]);

        $this->writeFile("{$classNameSpace}/Data/{$classPrefix}Data.php", $code);
    }

    private function writeFile(string $namespacedPath, string $content): void
    {
        $path = $this->resolveOutputPath($namespacedPath);
        $directory = dirname($path);

        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new RuntimeException("Unable to create directory: {$directory}");
        }

        if ($this->writeIfChangedOnly && file_exists($path)) {
            $existingContent = file_get_contents($path);
            if ($existingContent === $content) {
                $this->writtenFiles[] = $this->resolveRelativeOutputPath($path);
                return;
            }
        }

        echo '生成:' . $path . PHP_EOL;
        file_put_contents($path, $content);

        $this->writtenFiles[] = $this->resolveRelativeOutputPath($path);
    }

    private function resolveOutputPath(string $namespacedPath): string
    {
        $relativePath = str_replace(['AdOceanSdk/', 'AdOceanSdk\\', '\\'], ['', '', '/'], $namespacedPath);

        return rtrim($this->outputRoot, '/') . '/' . ltrim($relativePath, '/');
    }

    private function resolveRelativeOutputPath(string $path): string
    {
        $relativePath = str_replace(rtrim($this->outputRoot, '/') . '/', '', $path);

        return str_replace('\\', '/', $relativePath);
    }

    private function renderTemplate(string $templateName, array $variables): string
    {
        $templatePath = rtrim($this->templateRoot, '/') . '/' . $templateName;
        $template = file_get_contents($templatePath);

        if ($template === false) {
            throw new RuntimeException("Unable to read template: {$templatePath}");
        }

        $replacements = [];
        foreach ($variables as $key => $value) {
            $replacements['{{' . $key . '}}'] = $value;
        }

        return strtr($template, $replacements);
    }

    private function toCamelCase(string $str): string
    {
        return str_replace('_', '', ucwords($str, '_'));
    }

    private function buildDataClassPrefix(string $rootClassPrefix, array $pathSegments): string
    {
        if ($pathSegments === []) {
            return $rootClassPrefix;
        }

        return match ($this->namingStrategy) {
            'legacy' => $rootClassPrefix . implode('', $pathSegments),
            'hash' => $rootClassPrefix . 'N' . strtoupper(substr(md5(implode('.', $pathSegments)), 0, 8)),
        };
    }

    private function generatePhpType(string $type): string
    {
        if (str_ends_with($type, '[]')) {
            return 'array';
        }

        if (str_contains($type, '[')) {
            return 'array';
        }

        return $this->typeMapping[$type] ?? $type;
    }

    private function persistManifest(string $classNameSpace, string $classPrefix, array $docData): void
    {
        if ($this->manifestPath === null) {
            return;
        }

        $apiName = 'open' . $classPrefix . 'Api';
        $entry = [
            'desc' => $docData['request_title'] ?? '',
            'doc' => $docData['request_doc'] ?? '',
            'call' => "{$classNameSpace}\\Api\\{$classPrefix}Api",
            'params' => "{$classNameSpace}\\Params\\{$classPrefix}Params",
            'response' => "{$classNameSpace}\\Response\\{$classPrefix}Response",
            'request_method' => $docData['request_method'] ?? '',
            'request_url' => $docData['request_url'] ?? '',
            'generated_files' => array_values(array_unique($this->writtenFiles)),
            'naming_strategy' => $this->namingStrategy,
        ];

        (new ApiManifestRepository($this->manifestPath))->upsert($apiName, $entry);
    }

    private function loadManifestEntry(string $apiName): array
    {
        if ($this->manifestPath === null || !file_exists($this->manifestPath)) {
            return [];
        }

        $manifest = (new ApiManifestRepository($this->manifestPath))->load();

        return is_array($manifest[$apiName] ?? null) ? $manifest[$apiName] : [];
    }

    private function cleanupStaleFiles(array $previousFiles, array $currentFiles): void
    {
        if (!$this->cleanupStale || $previousFiles === []) {
            return;
        }

        $staleFiles = array_diff($previousFiles, $currentFiles);
        foreach ($staleFiles as $relativePath) {
            $path = rtrim($this->outputRoot, '/') . '/' . ltrim((string) $relativePath, '/');
            if (!is_file($path)) {
                continue;
            }

            unlink($path);
            $this->cleanupEmptyDirectories(dirname($path));
        }
    }

    private function cleanupEmptyDirectories(string $directory): void
    {
        $outputRoot = rtrim($this->outputRoot, '/');

        while ($directory !== $outputRoot && str_starts_with($directory, $outputRoot)) {
            $files = scandir($directory);
            if ($files === false || count(array_diff($files, ['.', '..'])) > 0) {
                return;
            }

            rmdir($directory);
            $directory = dirname($directory);
        }
    }
}