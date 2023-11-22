<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片文件
//upload_type为UPLOAD_BY_FILE必填
//格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
class FileImageAdPostParamImageFileData extends Data
{

    /**
     * @var mixed $data
     */
    public mixed $data;

    /**
     * @var string $file_name
     */
    public string $file_name;

}