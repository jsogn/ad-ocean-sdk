<?php

$configFile = '../src/api_config.php';
$sourceFile = '../src/OpenApi.php';
$outputFile = '../src/OpenApi.php';

$config = include $configFile;

$sourceCode = file_get_contents($sourceFile);

$annotationCode = "";

foreach ($config as $apiName => $apiData) {
    $desc = $apiData['desc'] ?? '';
    $doc  = $apiData['doc'] ?? '';

    $annotationCode .= " * @method \\{$apiData['response']} $apiName(\\{$apiData['params']}|array \$params) $desc $doc\n";
}

$replacement = "/**\n";
$replacement .= " * class OpenApi\n";
$replacement .= " * 开放接口调度类\n";
$replacement .= $annotationCode;
$replacement .= " */";

$updatedCode = preg_replace('/\/\*\*\n.*?\*\//s', $replacement, $sourceCode);

file_put_contents($outputFile, $updatedCode);

echo 'success';
