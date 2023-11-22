<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片素材信息
class CreativeDetailGetResponseCreativeImageMaterialsImageInfoData extends Data
{

    /**
     * @var string $image_id 图片ID
     */
    public string $image_id;
    
    /**
     * @var string $name 图片描述，搜索创意素材类型为橱窗素材时返回
     */
    public string $name;
    
}