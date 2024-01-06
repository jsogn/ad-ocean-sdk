<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片主题
class PromotionListGetResponseListPromotionMaterialsCarouselMaterialListImageSubjectData extends Data
{

    /**
     * @var string $text 图片文字
     */
    public string $text;
    
    /**
     * @var string $description 图片详述
     */
    public string $description;
    
    /**
     * @var string $brand 品牌
     */
    public string $brand;
    
    /**
     * @var string $comment 备注
     */
    public string $comment;
    
}