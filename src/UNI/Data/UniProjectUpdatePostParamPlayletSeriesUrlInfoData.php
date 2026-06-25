<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 短剧专辑链接信息
class UniProjectUpdatePostParamPlayletSeriesUrlInfoData extends Data
{

    /**
     * @var string $playlet_series_url_type 短剧专辑链接类型，允许值：IAA，当delivery_product=ALBUM剧目，monetization_mode=IAA_AND_IAP 时，支持传入IAP，当delivery_product=ALBUM剧目，且monetization_mode=IAP 或 monetization_mode=IAA_AND_IAP 时，支持传入
     */
    public string $playlet_series_url_type;

    /**
     * @var string $playlet_series_url IAA链接，当playlet_series_url_type=IAA时，支持传入，仅支持传入1个，超过1个时报错IAP链接，当playlet_series_url_type=IAP时，支持传入，长度：[1，10]，超过10个时报错短剧专辑链接
     */
    public string $playlet_series_url;

}