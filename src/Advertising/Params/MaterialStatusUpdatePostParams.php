<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class MaterialStatusUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\MaterialStatusUpdatePostParamData> $data 批量更新广告启用状态，包含广告ID和操作状态，list长度限制1～10
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\MaterialStatusUpdatePostParamData::class)]
    public array $data;
    
}