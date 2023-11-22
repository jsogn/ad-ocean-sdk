<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片模版信息，SDPA/DPA场景下有效
class AdvertiserCreativeDetailGetResponseCreativeListImageMaterialsTemplateImageData extends Data
{

    /**
     * @var int $template_id 模板id
     */
    public int $template_id;
    
}