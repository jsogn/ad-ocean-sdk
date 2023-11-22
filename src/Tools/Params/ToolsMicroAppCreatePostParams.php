<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsMicroAppCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户
     */
    public int $advertiser_id;
    
    /**
     * @var string $app_id 字节小程序app id
     */
    public string $app_id;
    
    /**
     * @var string $remark 备注
     */
    public string $remark;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsMicroAppCreatePostParamAppPageData $app_page 小程序页面，审核通过前只能创建一条
     */
    public \AdOceanSdk\Tools\Data\ToolsMicroAppCreatePostParamAppPageData $app_page;
    
}