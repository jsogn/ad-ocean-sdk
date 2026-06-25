<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 短剧专辑链接信息
class OcProjectMaterialGetResponsePlayletSeriesUrlInfoData extends Data
{

    /**
     * @var string $playlet_series_url_type 短剧专辑类型，可选值: IAA IAP
     */
    public string $playlet_series_url_type;

    /**
     * @var string $playlet_series_url 短剧专辑链接
     */
    public string $playlet_series_url;

}