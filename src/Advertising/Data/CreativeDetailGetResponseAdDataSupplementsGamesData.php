<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 云游戏内容
class CreativeDetailGetResponseAdDataSupplementsGamesData extends Data
{

    /**
     * @var string $id 云游戏id
     */
    public string $id;
    
    /**
     * @var string $orientation 云游戏横竖屏
     */
    public string $orientation;
    
}