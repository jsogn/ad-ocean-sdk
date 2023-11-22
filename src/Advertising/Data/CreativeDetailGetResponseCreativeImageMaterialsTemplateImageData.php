<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片模版信息，SDPA/DPA场景下有效
class CreativeDetailGetResponseCreativeImageMaterialsTemplateImageData extends Data
{

    /**
     * @var int $template_id DPA图片模板ID
     */
    public int $template_id;
    
}