<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionAutoGenerateConfigCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id ;
    
    /**
     * @var int $promotion_id 广告ID，
     */
    public int $promotion_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigCreatePostParamStrategyDataData> $strategy_data 策略数据(列表中strategy_id需唯一, 即同一个策略（strategy）的策略配置项列表(strategy_state)，需放到同一个对象内，不可分开传递)
     */
    public array $strategy_data;
    
}