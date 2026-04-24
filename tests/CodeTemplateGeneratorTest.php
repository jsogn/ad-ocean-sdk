<?php

declare(strict_types=1);

require_once __DIR__ . '/../script/bootstrap.php';

use AdOceanSdk\Script\Generator\CodeTemplateGenerator;
use PHPUnit\Framework\TestCase;

final class CodeTemplateGeneratorTest extends TestCase
{
    private array $tempDirs = [];

    protected function tearDown(): void
    {
        foreach ($this->tempDirs as $tempDir) {
            $this->deleteDirectory($tempDir);
        }
    }

    public function testGeneratorProducesExpectedFilesForProjectDeepCpaBidUpdate(): void
    {
        $outputRoot = $this->createTempOutputRoot();
        $generator = new CodeTemplateGenerator($outputRoot, __DIR__ . '/../script/templates');

        $generator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        foreach ($this->expectedGeneratedFiles() as $relativePath) {
            $actualPath = $outputRoot . '/' . $relativePath;
            $expectedPath = __DIR__ . '/../src/' . $relativePath;

            self::assertFileExists($actualPath);
            self::assertSame(
                $this->normalizeFileContents(file_get_contents($expectedPath)),
                $this->normalizeFileContents(file_get_contents($actualPath)),
                $relativePath
            );
        }
    }

    public function testTypeMappingCanBeOverridden(): void
    {
        $outputRoot = $this->createTempOutputRoot();
        $generator = new CodeTemplateGenerator(
            $outputRoot,
            __DIR__ . '/../script/templates',
            [
                'number' => 'float',
                'double' => 'float',
            ]
        );

        $generator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        $paramsClass = file_get_contents($outputRoot . '/Advertising/Params/ProjectDeepCpaBidUpdatePostParams.php');
        $paramDataClass = file_get_contents($outputRoot . '/Advertising/Data/ProjectDeepCpaBidUpdatePostParamData.php');

        self::assertStringContainsString('public float $advertiser_id;', $paramsClass);
        self::assertStringContainsString('public float $project_id;', $paramDataClass);
    }

    public function testGeneratorWritesManifestEntryWhenConfigured(): void
    {
        $outputRoot = $this->createTempOutputRoot();
        $manifestPath = dirname($outputRoot) . '/manifest.php';

        $generator = new CodeTemplateGenerator(
            $outputRoot,
            __DIR__ . '/../script/templates',
            manifestPath: $manifestPath,
        );

        $generator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        self::assertFileExists($manifestPath);

        $manifest = require $manifestPath;
        self::assertArrayHasKey('openProjectDeepCpaBidUpdatePostApi', $manifest);

        $entry = $manifest['openProjectDeepCpaBidUpdatePostApi'];
        self::assertSame('AdOceanSdk\Advertising\Api\ProjectDeepCpaBidUpdatePostApi', $entry['call']);
        self::assertSame('AdOceanSdk\Advertising\Params\ProjectDeepCpaBidUpdatePostParams', $entry['params']);
        self::assertSame('AdOceanSdk\Advertising\Response\ProjectDeepCpaBidUpdatePostResponse', $entry['response']);
        self::assertSame('legacy', $entry['naming_strategy']);
        self::assertContains('Advertising/Api/ProjectDeepCpaBidUpdatePostApi.php', $entry['generated_files']);
    }

    public function testHashNamingStrategyCanBeSelected(): void
    {
        $outputRoot = $this->createTempOutputRoot();
        $generator = new CodeTemplateGenerator(
            $outputRoot,
            __DIR__ . '/../script/templates',
            namingStrategy: 'hash',
        );

        $generator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        $hashSuffix = strtoupper(substr(md5('Errors'), 0, 8));
        $nestedClassName = 'ProjectDeepCpaBidUpdatePostResponseN' . $hashSuffix . 'Data';
        $nestedFile = $outputRoot . '/Advertising/Data/' . $nestedClassName . '.php';

        self::assertFileExists($nestedFile);
        self::assertStringContainsString(
            $nestedClassName,
            (string) file_get_contents($nestedFile)
        );
        self::assertStringContainsString(
            '\\AdOceanSdk\\Advertising\\Data\\' . $nestedClassName,
            (string) file_get_contents($outputRoot . '/Advertising/Data/ProjectDeepCpaBidUpdatePostResponseData.php')
        );
    }

    public function testGeneratorRemovesStaleFilesRecordedInManifest(): void
    {
        $outputRoot = $this->createTempOutputRoot();
        $manifestPath = dirname($outputRoot) . '/manifest.php';

        $hashGenerator = new CodeTemplateGenerator(
            $outputRoot,
            __DIR__ . '/../script/templates',
            manifestPath: $manifestPath,
            namingStrategy: 'hash',
        );
        $hashGenerator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        $staleFile = $outputRoot . '/Advertising/Data/ProjectDeepCpaBidUpdatePostResponseN' . strtoupper(substr(md5('Errors'), 0, 8)) . 'Data.php';
        self::assertFileExists($staleFile);

        $legacyGenerator = new CodeTemplateGenerator(
            $outputRoot,
            __DIR__ . '/../script/templates',
            manifestPath: $manifestPath,
            namingStrategy: 'legacy',
        );
        $legacyGenerator->generateFromDoc($this->loadDocData(), 'Advertising/ProjectDeepCpaBidUpdate');

        self::assertFileDoesNotExist($staleFile);
        self::assertFileExists($outputRoot . '/Advertising/Data/ProjectDeepCpaBidUpdatePostResponseErrorsData.php');
    }

    private function loadDocData(): array
    {
        return json_decode(
            file_get_contents(__DIR__ . '/../doc.json'),
            true,
            512,
            JSON_THROW_ON_ERROR
        );
    }

    private function expectedGeneratedFiles(): array
    {
        return [
            'Advertising/Api/ProjectDeepCpaBidUpdatePostApi.php',
            'Advertising/Params/ProjectDeepCpaBidUpdatePostParams.php',
            'Advertising/Response/ProjectDeepCpaBidUpdatePostResponse.php',
            'Advertising/Data/ProjectDeepCpaBidUpdatePostParamData.php',
            'Advertising/Data/ProjectDeepCpaBidUpdatePostResponseData.php',
            'Advertising/Data/ProjectDeepCpaBidUpdatePostResponseErrorsData.php',
        ];
    }

    private function createTempOutputRoot(): string
    {
        $tempDir = sys_get_temp_dir() . '/ad-ocean-sdk-generator-' . uniqid('', true);
        $outputRoot = $tempDir . '/src';

        mkdir($outputRoot, 0777, true);
        $this->tempDirs[] = $tempDir;

        return $outputRoot;
    }

    private function normalizeFileContents(string|false $contents): string
    {
        self::assertNotFalse($contents);

        return str_replace("\r\n", "\n", rtrim($contents));
    }

    private function deleteDirectory(string $directory): void
    {
        if (!is_dir($directory)) {
            return;
        }

        $items = scandir($directory);
        if ($items === false) {
            return;
        }

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            $path = $directory . '/' . $item;
            if (is_dir($path)) {
                $this->deleteDirectory($path);
                continue;
            }

            unlink($path);
        }

        rmdir($directory);
    }
}