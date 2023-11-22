<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片信息
class CarouselUpdatePostResponseCarouselsData extends Data
{

    /**
     * @var int $id 图片id
     */
    public int $id;
    
    /**
     * @var int $status_code 状态码
     */
    public int $status_code;
    
    /**
     * @var string $message 返回信息
     */
    public string $message;
    
}