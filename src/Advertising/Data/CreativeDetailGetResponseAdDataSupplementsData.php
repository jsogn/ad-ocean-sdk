<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 云游戏素材
class CreativeDetailGetResponseAdDataSupplementsData extends Data
{

    /**
     * @var string $supplement_type 云游戏类型
     */
    public string $supplement_type;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseAdDataSupplementsGamesData> $games 云游戏内容
     */
    public array $games;
    
}