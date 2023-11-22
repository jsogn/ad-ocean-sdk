<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsBidsSuggestGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $pricing 计费方式，可选值:
     */
    public string $pricing;
    
    /**
     * @var string $external_action 转化目标，允许值见【附录-枚举值-转化类型】
     */
    public string $external_action;
    
    /**
     * @var string $deep_external_action 深度转化目标，允许值见【附录-枚举值-转化类型】
     */
    public string $deep_external_action;
    
    /**
     * @var string $deep_bid_type 深度转化目标，允许值见【附录-枚举值-深度优化方式】
     */
    public string $deep_bid_type;
    
}