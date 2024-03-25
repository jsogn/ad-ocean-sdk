<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 价格信息
class DPADetailGetGetResponseListPriceInfoData extends Data
{

    /**
     * @var float $value 商品原价，可用于素材拼接，以及动态创意标题或者素材
     */
    public float $value;
    
    /**
     * @var string $price_unit 价格单位
     */
    public string $price_unit;
    
    /**
     * @var float $saving 减价
     */
    public float $saving;
    
    /**
     * @var float $discount 折扣
     */
    public float $discount;
    
    /**
     * @var float $price 商品现价
     */
    public float $price;
    
    /**
     * @var string $sales_promotion 促销活动，关于商品促销活动的描述信息
     */
    public string $sales_promotion;
    
    /**
     * @var string $down_payment 首付
     */
    public string $down_payment;
    
    /**
     * @var string $mortgage 月付
     */
    public string $mortgage;
    
    /**
     * @var string $daily_mortgage 日付
     */
    public string $daily_mortgage;
    
}