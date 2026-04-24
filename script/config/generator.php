<?php

return [
    'output_root' => dirname(__DIR__, 2) . '/src',
    'template_root' => dirname(__DIR__) . '/templates',
    'type_mapping_file' => __DIR__ . '/type_mapping.php',
    'manifest_path' => __DIR__ . '/api_manifest.php',
    'naming_strategy' => 'legacy',
    'cleanup_stale' => true,
    'write_if_changed_only' => true,
    'api_config_output' => dirname(__DIR__, 2) . '/src/api_config.php',
    'open_api_source' => dirname(__DIR__, 2) . '/src/OpenApi.php',
    'open_api_output' => dirname(__DIR__, 2) . '/src/OpenApi.php',
    'open_api_trait_output' => dirname(__DIR__, 2) . '/src/OpenApiMethodsTrait.php',
];