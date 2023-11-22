<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 试玩信息
class CreativeDetailGetResponseCreativeListPlayableMaterialPlayableInfoData extends Data
{

    /**
     * @var string $playable_url 试玩素材URL
     */
    public string $playable_url;
    
}