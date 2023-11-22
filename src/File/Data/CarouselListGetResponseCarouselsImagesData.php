<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片信息
class CarouselListGetResponseCarouselsImagesData extends Data
{

    /**
     * @var string $image_id 图片id
     */
    public string $image_id;
    
    /**
     * @var int $material_id 图片素材id
     */
    public int $material_id;
    
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
     * @var string $url 图片url
     */
    public string $url;
    
    /**
     * @var \AdOceanSdk\File\Data\CarouselListGetResponseCarouselsImagesImageSubjectData $image_subject 图片主题
     */
    public \AdOceanSdk\File\Data\CarouselListGetResponseCarouselsImagesImageSubjectData $image_subject;
    
}