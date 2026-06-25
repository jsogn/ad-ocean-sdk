<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectMonetizationModePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 投放账户id
     */
    public int $advertiser_id;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectMonetizationModePostParamProjectListData> $project_list 项目id列表
     */
    public array $project_list;

}