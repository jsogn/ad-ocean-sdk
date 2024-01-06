<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 原生广告设置
class PromotionListGetResponseListNativeSettingData extends Data
{

    /**
     * @var string $aweme_id 授权抖音号id，可通过【获取抖音号授权关系】接口获得当传入抖音号表示原生广告开启
     */
    public string $aweme_id;
    
    /**
     * @var string $anchor_related_type 原生锚点启用开关，允许值:不启用OFF，自动生成AUTO，手动选择SELECT默认值为 OFF
     */
    public string $anchor_related_type;
    
}