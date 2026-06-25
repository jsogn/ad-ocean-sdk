<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 项目id列表
class UniProjectMonetizationModePostParamProjectListData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var string $monetization_mode 可选值: IAA_AND_IAP 混合变现IAP 用户付费
     */
    public string $monetization_mode;

    /**
     * @var string $playlet_series_url 短剧专辑链接当monetization_mode=IAA_AND_IAP混合变现时，有效且必填仅支持传入IAA链接，如传入IAP链接，则更新失败本次更新为全量更新
     */
    public string $playlet_series_url;

}