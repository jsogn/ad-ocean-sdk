<?php
require_once '../vendor/autoload.php';

function scanClasses($directory)
{
    $classes = [];

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    foreach ($iterator as $file) {
        if ($file->isDir()) {
            continue;
        }

        $filename  = $file->getFilename();
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        if ($extension === 'php') {
            $class = getClassFromFile($file->getPathname());
            if ($class) {
                $meta = getClassMeta($file->getPathname());
                if ($meta) {
                    $classes[$class] = $meta;
                }
            }
        }
    }

    return $classes;
}

function getClassFromFile($file)
{
    $fp    = fopen($file, 'r');
    $class = '';

    while (($line = fgets($fp)) !== false) {
        if (preg_match('/^namespace\s+(.+);/', $line, $matches)) {
            $namespace = $matches[1];
        }
        if (preg_match('/^class\s+(\w+)/', $line, $matches)) {
            $class = $namespace . '\\' . $matches[1];
            break;
        }
    }

    fclose($fp);

    return $class;
}

function getClassMeta($file)
{
    $fp   = fopen($file, 'r');
    $meta = [];

    while (($line = fgets($fp)) !== false) {
        if (preg_match('/\* @desc\s+(.+)/', $line, $matches)) {
            $meta['desc'] = $matches[1];
        } elseif (preg_match('/\* @doc\s+(.+)/', $line, $matches)) {
            $meta['doc'] = $matches[1];
        }
    }

    fclose($fp);

    return $meta;
}

function getDirectories($path, $excludedDirectories)
{
    $directories = glob($path . '/*', GLOB_ONLYDIR);
    return array_filter($directories, function ($directory) use ($excludedDirectories) {
        $directoryName = basename($directory);
        return !in_array($directoryName, $excludedDirectories);
    });
}

$directory = '../src';
$dirs      = getDirectories($directory, ['Kernel']);
$classes   = [];

foreach ($dirs as $dire) {
    $classes = [...$classes, ...scanClasses($directory)];
}

$result  = "<?php\n\nreturn [\n";
$classes = array_reverse($classes);
foreach ($classes as $class => $meta) {
    if (!class_exists($class)) {
        continue;
    }

    $className = basename($class, '.php');
    $className = substr($className, strrpos($className, '\\') + 1);

    $result      .= "    /**
    * @desc {$meta['desc']}
    * @doc  {$meta['doc']}
    **/\n";
    $result      .= "    'open{$className}' => [\n";
    $result      .= "        'desc' => '{$meta['desc']}',\n";
    $result      .= "        'doc' => '{$meta['doc']}',\n";
    $result      .= "        'call' => {$class}::class,\n";
    $paramsClass = str_replace('Api', 'Params', $class);
    if (class_exists($paramsClass)) {
        $result .= "        'params' => {$paramsClass}::class,\n";
    } else {
        $result .= "        'params' => AdOceanSdk\RequestParams::class,\n";
    }

    $responseClass = str_replace('Api', 'Response', $class);
    if (class_exists($responseClass)) {
        $result .= "        'response' => {$responseClass}::class,\n";
    } else {
        $result .= "        'response' => AdOceanSdk\RequestResponse::class,\n";
    }

    $result .= "    ],\n";
}

$result .= "];";

file_put_contents('../src/api_config.php', $result);

echo 'success';
