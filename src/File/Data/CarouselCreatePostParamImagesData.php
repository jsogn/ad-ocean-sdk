<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片信息，包含图片id和图片主题
class CarouselCreatePostParamImagesData extends Data
{

    /**
     * @var string $image_id  图片id，根据上传广告图片接口获取
     */
    public string $image_id ;
    
    /**
     * @var \AdOceanSdk\File\Data\CarouselCreatePostParamImagesImageSubjectData $image_subject 图片主题
     */
    public \AdOceanSdk\File\Data\CarouselCreatePostParamImagesImageSubjectData $image_subject;
    
}