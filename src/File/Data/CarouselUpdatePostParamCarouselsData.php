<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 需要更新的图文信息
class CarouselUpdatePostParamCarouselsData extends Data
{

    /**
     * @var int $id  图文id
     */
    public int $id ;
    
    /**
     * @var string $file_name 更新图文标题
     */
    public string $file_name;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselUpdatePostParamCarouselsImageSubjectsData> $image_subjects 图片主题
     */
    public array $image_subjects;
    
}