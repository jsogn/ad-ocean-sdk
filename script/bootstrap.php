<?php

declare(strict_types=1);

$generatorFiles = glob(__DIR__ . '/generator/*.php');

if ($generatorFiles !== false) {
    sort($generatorFiles);

    foreach ($generatorFiles as $generatorFile) {
        require_once $generatorFile;
    }
}