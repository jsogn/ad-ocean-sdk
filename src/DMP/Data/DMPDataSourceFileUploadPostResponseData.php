<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DMPDataSourceFileUploadPostResponseData extends Data
{

    /**
     * @var string $file_path 文件路径，包含作为文件唯一标识的字符串(14天后文件路径过期)
     */
    public string $file_path;
    
}