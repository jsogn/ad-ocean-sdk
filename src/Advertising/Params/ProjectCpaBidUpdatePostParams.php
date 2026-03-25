<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectCpaBidUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 投放账户ID
     */
    public int $advertiser_id;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectCpaBidUpdatePostParamData> $data 批量修改出价，list长度限制1～10
     */
    public array $data;

}