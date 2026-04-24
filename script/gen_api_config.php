<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

use AdOceanSdk\Script\Generator\ApiConfigGenerator;

$options = getopt('', [
    'config::',
    'src-root::',
    'manifest-path::',
    'output-file::',
]);

$configFile = $options['config'] ?? (__DIR__ . '/config/generator.php');
$config = file_exists($configFile) ? require $configFile : [];

$srcRoot = $options['src-root'] ?? ($config['output_root'] ?? (__DIR__ . '/../src'));
$manifestPath = $options['manifest-path'] ?? ($config['manifest_path'] ?? null);
$outputFile = $options['output-file'] ?? (rtrim($srcRoot, '/') . '/api_config.php');

$generator = new ApiConfigGenerator($srcRoot, $manifestPath);
$generator->generate($outputFile);

echo 'success';
