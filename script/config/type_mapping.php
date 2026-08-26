<?php

return [
    'list' => 'array',
    'number' => 'int',
    'double' => 'float',
    'dict' => 'array',
    'map' => 'array',
    'json' => 'mixed',
    // 文件上传字段：文档类型 file 在 PHP 中无对应标量类型，映射为 mixed（见 FileVideoAdPostParams 惯例）
    'file' => 'mixed',
];