<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdvertiserCreativeTemplateDetailGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $template_type 模板样式,eg: 可选值:
     */
    public string $template_type;
    
}