<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectBudgetUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectBudgetUpdatePostParamData> $data 批量修改预算，list长度限制1～10
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectBudgetUpdatePostParamData::class)]
    public array $data;
    
}