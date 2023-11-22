<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片信息
class CarouselAdGetResponseCarouselsImagesData extends Data
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
     * @var int $ratio 图片比例
     */
    public int $ratio;
    
    /**
     * @var int $size 图片尺寸大小
     */
    public int $size;
    
    /**
     * @var object $url 图片url
     */
    public object $url;
    
    /**
     * @var \AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsImagesImageSubjectData $image_subject 图片主题
     */
    public \AdOceanSdk\File\Data\CarouselAdGetResponseCarouselsImagesImageSubjectData $image_subject;
    
}