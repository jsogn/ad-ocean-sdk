<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片信息
class CarouselCreatePostResponseCarouselImagesData extends Data
{

    /**
     * @var string $image_id 图片id
     */
    public string $image_id;
    
    /**
     * @var int $height 图片高度
     */
    public int $height;
    
    /**
     * @var int $width 图片宽度
     */
    public int $width;
    
    /**
     * @var float $ratio 图片比例
     */
    public float $ratio;
    
    /**
     * @var int $size 图片大小
     */
    public int $size;
    
    /**
     * @var string $url 图片url
     */
    public string $url;
    
    /**
     * @var array<\AdOceanSdk\File\Data\CarouselCreatePostResponseCarouselImagesImageSubjectData> $image_subject 图片主题
     */
    public array $image_subject;
    
}