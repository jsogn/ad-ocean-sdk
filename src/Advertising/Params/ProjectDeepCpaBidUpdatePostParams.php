<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectDeepCpaBidUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 投放账户ID
     */
    public int $advertiser_id;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectDeepCpaBidUpdatePostParamData> $data 批量修改深度出价，list长度限制1～10
     */
    public array $data;

}