<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class DMPCustomAudienceReadGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DMP\Data\DMPCustomAudienceReadGetResponseCustomAudienceListData> $custom_audience_list 人群包列表数据
     */
    public array $custom_audience_list;
    
}