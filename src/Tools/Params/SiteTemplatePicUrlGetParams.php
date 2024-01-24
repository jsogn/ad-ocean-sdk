<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class SiteTemplatePicUrlGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主
     */
    public int $advertiser_id;
    
    /**
     * @var int $site_id 站点id
     */
    public int $site_id;
    
    /**
     * @var int $template_id 模板id
     */
    public int $template_id;
    
}