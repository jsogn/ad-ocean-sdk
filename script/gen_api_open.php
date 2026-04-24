<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

use AdOceanSdk\Script\Generator\OpenApiAnnotationGenerator;

$options = getopt('', [
    'config::',
    'config-file::',
    'source-file::',
    'output-file::',
    'trait-file::',
]);

$generatorConfigFile = $options['config'] ?? (__DIR__ . '/config/generator.php');
$generatorConfig = file_exists($generatorConfigFile) ? require $generatorConfigFile : [];

$configFile = $options['config-file'] ?? ($generatorConfig['api_config_output'] ?? (__DIR__ . '/../src/api_config.php'));
$sourceFile = $options['source-file'] ?? ($generatorConfig['open_api_source'] ?? (__DIR__ . '/../src/OpenApi.php'));
$outputFile = $options['output-file'] ?? ($generatorConfig['open_api_output'] ?? $sourceFile);
$traitFile = $options['trait-file'] ?? ($generatorConfig['open_api_trait_output'] ?? (dirname($outputFile) . '/OpenApiMethodsTrait.php'));

$config = include $configFile;

$generator = new OpenApiAnnotationGenerator();
$generator->generateFromConfig($config, $sourceFile, $outputFile, $traitFile);

echo 'success';
