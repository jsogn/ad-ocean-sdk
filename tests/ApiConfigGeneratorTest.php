<?php

declare(strict_types=1);

require_once __DIR__ . '/../script/bootstrap.php';

use AdOceanSdk\Script\Generator\ApiConfigGenerator;
use AdOceanSdk\Script\Generator\ApiManifestRepository;
use PHPUnit\Framework\TestCase;

final class ApiConfigGeneratorTest extends TestCase
{
    private array $tempDirs = [];

    protected function tearDown(): void
    {
        foreach ($this->tempDirs as $tempDir) {
            $this->deleteDirectory($tempDir);
        }
    }

    public function testManifestEntriesOverrideScannedMetadata(): void
    {
        $srcRoot = $this->createTempSrcRoot();
        $manifestPath = dirname($srcRoot) . '/manifest.php';
        $outputFile = dirname($srcRoot) . '/api_config.php';

        $this->writeApiFixture($srcRoot, 'ManifestPreferredApi', '扫描描述', 'https://scan.example.com/doc');

        (new ApiManifestRepository($manifestPath))->save([
            'openManifestPreferredApi' => [
                'desc' => 'manifest 描述',
                'doc' => 'https://manifest.example.com/doc',
                'call' => 'AdOceanSdk\\Demo\\Api\\ManifestPreferredApi',
                'params' => 'AdOceanSdk\\Demo\\Params\\ManifestPreferredParams',
                'response' => 'AdOceanSdk\\Demo\\Response\\ManifestPreferredResponse',
            ],
        ]);

        $generator = new ApiConfigGenerator($srcRoot, $manifestPath);
        $generator->generate($outputFile);

        $config = include $outputFile;
        self::assertSame('manifest 描述', $config['openManifestPreferredApi']['desc']);
        self::assertSame('AdOceanSdk\\Demo\\Params\\ManifestPreferredParams', $config['openManifestPreferredApi']['params']);
        self::assertSame('AdOceanSdk\\Demo\\Response\\ManifestPreferredResponse', $config['openManifestPreferredApi']['response']);
    }

    public function testGeneratorScansApiFilesWithoutAutoloadingClasses(): void
    {
        $srcRoot = $this->createTempSrcRoot();
        $outputFile = dirname($srcRoot) . '/api_config.php';

        $this->writeApiFixture($srcRoot, 'ScannedOnlyApi', '扫描生成', 'https://scan.example.com/generated');

        $generator = new ApiConfigGenerator($srcRoot);
        $generator->generate($outputFile);

        $config = include $outputFile;
        self::assertArrayHasKey('openScannedOnlyApi', $config);
        self::assertSame('扫描生成', $config['openScannedOnlyApi']['desc']);
        self::assertSame('AdOceanSdk\\Demo\\Params\\ScannedOnlyParams', $config['openScannedOnlyApi']['params']);
        self::assertSame('AdOceanSdk\\Demo\\Response\\ScannedOnlyResponse', $config['openScannedOnlyApi']['response']);
    }

    private function createTempSrcRoot(): string
    {
        $tempDir = sys_get_temp_dir() . '/ad-ocean-sdk-api-config-' . uniqid('', true);
        $srcRoot = $tempDir . '/src';

        mkdir($srcRoot, 0777, true);
        $this->tempDirs[] = $tempDir;

        return $srcRoot;
    }

    private function writeApiFixture(string $srcRoot, string $className, string $desc, string $doc): void
    {
        $apiDirectory = $srcRoot . '/Demo/Api';
        $paramsDirectory = $srcRoot . '/Demo/Params';
        $responseDirectory = $srcRoot . '/Demo/Response';

        mkdir($apiDirectory, 0777, true);
        mkdir($paramsDirectory, 0777, true);
        mkdir($responseDirectory, 0777, true);

        file_put_contents($apiDirectory . '/' . $className . '.php', <<<PHP
<?php

namespace AdOceanSdk\Demo\Api;

/**
 * @desc {$desc}
 * @doc  {$doc}
 */
class {$className}
{
}
PHP);

        $baseName = preg_replace('/Api$/', '', $className) ?: $className;
        file_put_contents($paramsDirectory . '/' . $baseName . 'Params.php', "<?php\n\nnamespace AdOceanSdk\\Demo\\Params;\n\nclass {$baseName}Params\n{\n}\n");
        file_put_contents($responseDirectory . '/' . $baseName . 'Response.php', "<?php\n\nnamespace AdOceanSdk\\Demo\\Response;\n\nclass {$baseName}Response\n{\n}\n");
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