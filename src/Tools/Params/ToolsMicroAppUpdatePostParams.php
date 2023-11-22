<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsMicroAppUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var int $instance_id 资产id
     */
    public int $instance_id;
    
    /**
     * @var string $remark 小程序备注名称支持更新，20字以内
     */
    public string $remark;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsMicroAppUpdatePostParamAppPageData> $app_page 小程序页面
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsMicroAppUpdatePostParamAppPageData::class)]
    public array $app_page;
    
}