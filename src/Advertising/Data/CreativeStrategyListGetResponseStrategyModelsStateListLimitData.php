<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 配置项限制条件
class CreativeStrategyListGetResponseStrategyModelsStateListLimitData extends Data
{

    /**
     * @var int $text_max_length 文案最大长度(仅对state_type=Text有效)
     */
    public int $text_max_length;
    
    /**
     * @var int $text_min_length 文案最小长度(仅对state_type=Text有效)
     */
    public int $text_min_length;
    
    /**
     * @var int $img_width 图片宽度(仅对state_type=Image有效)
     */
    public int $img_width;
    
    /**
     * @var int $img_height 图片高度(仅对state_type=Image有效)
     */
    public int $img_height;
    
}