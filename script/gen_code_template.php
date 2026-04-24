<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

use AdOceanSdk\Script\Generator\CodeTemplateGenerator;

$options = getopt('', [
    'config::',
    'output-root::',
    'template-root::',
    'manifest-path::',
    'type-mapping-file::',
    'naming-strategy::',
    'cleanup-stale::',
    'write-if-changed-only::',
], $restIndex);

$configFile = $options['config'] ?? (__DIR__ . '/config/generator.php');
$config = file_exists($configFile) ? require $configFile : [];

$classInput = $argv[$restIndex] ?? null;
if ($classInput === null) {
    die("Please provide the class input as a command line argument.\n");
}

$typeMappingFile = $options['type-mapping-file'] ?? ($config['type_mapping_file'] ?? (__DIR__ . '/config/type_mapping.php'));
$typeMapping = file_exists($typeMappingFile) ? require $typeMappingFile : null;

$generator = new CodeTemplateGenerator(
    $options['output-root'] ?? ($config['output_root'] ?? (__DIR__ . '/../src')),
    $options['template-root'] ?? ($config['template_root'] ?? (__DIR__ . '/templates')),
    is_array($typeMapping) ? $typeMapping : null,
    $options['manifest-path'] ?? ($config['manifest_path'] ?? null),
    $options['naming-strategy'] ?? ($config['naming_strategy'] ?? 'legacy'),
    filter_var($options['cleanup-stale'] ?? ($config['cleanup_stale'] ?? true), FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? true,
    filter_var($options['write-if-changed-only'] ?? ($config['write_if_changed_only'] ?? true), FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ?? true,
);

$json = file_get_contents(__DIR__ . '/../doc.json');
$docData = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

$generator->generateFromDoc($docData, $classInput);