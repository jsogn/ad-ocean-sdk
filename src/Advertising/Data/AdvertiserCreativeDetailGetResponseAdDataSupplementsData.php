<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 云游戏素材
class AdvertiserCreativeDetailGetResponseAdDataSupplementsData extends Data
{

    /**
     * @var string $supplement_type 云游戏类型
     */
    public string $supplement_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataSupplementsGamesData> $games 云游戏内容
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataSupplementsGamesData::class)]
    public array $games;
    
}