<?php

declare(strict_types=1);

require_once __DIR__ . '/../script/bootstrap.php';

use AdOceanSdk\Script\Generator\OpenApiAnnotationGenerator;
use PHPUnit\Framework\TestCase;

final class OpenApiAnnotationGeneratorTest extends TestCase
{
    private array $tempDirs = [];

    protected function tearDown(): void
    {
        foreach ($this->tempDirs as $tempDir) {
            $this->deleteDirectory($tempDir);
        }
    }

    public function testGeneratorReplacesOpenApiDocblockWithMethodAnnotations(): void
    {
        $sourceFile = $this->createSourceFile();
        $traitFile = dirname($sourceFile) . '/OpenApiMethodsTrait.php';
        $generator = new OpenApiAnnotationGenerator();

        $generator->generateFromConfig([
            'openDemoApi' => [
                'desc' => '演示接口',
                'doc' => 'https://example.com/demo',
                'params' => 'AdOceanSdk\\Demo\\Params\\DemoParams',
                'response' => 'AdOceanSdk\\Demo\\Response\\DemoResponse',
            ],
            'openSecondApi' => [
                'desc' => '第二个接口',
                'doc' => 'https://example.com/second',
                'params' => 'AdOceanSdk\\Demo\\Params\\SecondParams',
                'response' => 'AdOceanSdk\\Demo\\Response\\SecondResponse',
            ],
        ], $sourceFile, traitFile: $traitFile);

        $contents = (string) file_get_contents($sourceFile);
        $traitContents = (string) file_get_contents($traitFile);

        self::assertStringContainsString("class OpenApi\n{\n    use OpenApiMethodsTrait;\n\n    public function __call", $contents);
        self::assertStringContainsString('@see OpenApiMethodsTrait', $contents);
        self::assertStringNotContainsString('@method', $contents);
        self::assertStringContainsString('trait OpenApiMethodsTrait', $traitContents);
        self::assertStringContainsString('public function openDemoApi(\\AdOceanSdk\\Demo\\Params\\DemoParams|array $params = []): \\AdOceanSdk\\Demo\\Response\\DemoResponse', $traitContents);
        self::assertStringContainsString('public function openSecondApi(\\AdOceanSdk\\Demo\\Params\\SecondParams|array $params = []): \\AdOceanSdk\\Demo\\Response\\SecondResponse', $traitContents);
        self::assertStringContainsString('class OpenApi', $contents);
        self::assertStringContainsString('return $name;', $contents);

        require_once $traitFile;
        require_once $sourceFile;

        self::assertTrue(method_exists('AdOceanSdk\\TestGenerated\\OpenApi', 'openDemoApi'));
    }

    public function testGeneratorIsIdempotent(): void
    {
        $sourceFile = $this->createSourceFile();
        $traitFile = dirname($sourceFile) . '/OpenApiMethodsTrait.php';
        $generator = new OpenApiAnnotationGenerator();
        $config = [
            'openDemoApi' => [
                'desc' => '演示接口',
                'doc' => 'https://example.com/demo',
                'params' => 'AdOceanSdk\\Demo\\Params\\DemoParams',
                'response' => 'AdOceanSdk\\Demo\\Response\\DemoResponse',
            ],
        ];

        $generator->generateFromConfig($config, $sourceFile, traitFile: $traitFile);
        $firstPass = (string) file_get_contents($sourceFile);
        $firstTraitPass = (string) file_get_contents($traitFile);

        $generator->generateFromConfig($config, $sourceFile, traitFile: $traitFile);
        $secondPass = (string) file_get_contents($sourceFile);
        $secondTraitPass = (string) file_get_contents($traitFile);

        self::assertSame($firstPass, $secondPass);
        self::assertSame($firstTraitPass, $secondTraitPass);
        self::assertSame(1, substr_count($secondTraitPass, 'public function openDemoApi('));
    }

    public function testGeneratorNormalizesExistingTraitBlockIndentation(): void
    {
        $sourceFile = $this->createMalformedSourceFile();
        $traitFile = dirname($sourceFile) . '/OpenApiMethodsTrait.php';
        $generator = new OpenApiAnnotationGenerator();

        $generator->generateFromConfig([
            'openDemoApi' => [
                'desc' => '演示接口',
                'doc' => 'https://example.com/demo',
                'params' => 'AdOceanSdk\\Demo\\Params\\DemoParams',
                'response' => 'AdOceanSdk\\Demo\\Response\\DemoResponse',
            ],
        ], $sourceFile, traitFile: $traitFile);

        $contents = (string) file_get_contents($sourceFile);

        self::assertStringContainsString('class OpenApi' . "\n{\n    use OpenApiMethodsTrait;\n\n    private RequestClientInterface \$client;", $contents);
    }

    private function createSourceFile(): string
    {
        $tempDir = sys_get_temp_dir() . '/ad-ocean-sdk-openapi-' . uniqid('', true);
        mkdir($tempDir, 0777, true);
        $this->tempDirs[] = $tempDir;

        $sourceFile = $tempDir . '/OpenApi.php';
        file_put_contents($sourceFile, <<<'PHP'
<?php

namespace AdOceanSdk\TestGenerated;

/**
 * class OpenApi
 * 旧注解
 */
class OpenApi
{
    public function __call(string $name, array $args): mixed
    {
        return $name;
    }

    public function demo(string $name): string
    {
        return $name;
    }
}
PHP);

        return $sourceFile;
    }

    private function createMalformedSourceFile(): string
    {
        $tempDir = sys_get_temp_dir() . '/ad-ocean-sdk-openapi-malformed-' . uniqid('', true);
        mkdir($tempDir, 0777, true);
        $this->tempDirs[] = $tempDir;

        $sourceFile = $tempDir . '/OpenApi.php';
        file_put_contents($sourceFile, <<<'PHP'
<?php

namespace AdOceanSdk\TestGenerated;

use AdOceanSdk\Kernel\Interface\RequestClientInterface;

/**
 * class OpenApi
 * 开放接口调度类
 * @see OpenApiMethodsTrait
 */
class OpenApi
{
        use OpenApiMethodsTrait;

private RequestClientInterface $client;
}
PHP);

        return $sourceFile;
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