<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class SiteTemplatePreviewGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $template_id 模板ID，可通过【获取站点模版列表】查询模板ID
     */
    public int $template_id;
    
}