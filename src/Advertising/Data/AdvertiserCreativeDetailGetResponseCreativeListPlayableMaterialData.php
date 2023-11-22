<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 基础试玩素材
class AdvertiserCreativeDetailGetResponseCreativeListPlayableMaterialData extends Data
{

    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListPlayableMaterialPlayableInfoData $playable_info 试玩信息
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseCreativeListPlayableMaterialPlayableInfoData $playable_info;
    
}