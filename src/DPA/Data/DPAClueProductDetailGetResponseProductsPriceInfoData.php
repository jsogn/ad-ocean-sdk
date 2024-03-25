<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 价格信息
class DPAClueProductDetailGetResponseProductsPriceInfoData extends Data
{

    /**
     * @var float $value 商品原价
     */
    public float $value;
    
    /**
     * @var float $price 商品现价
     */
    public float $price;
    
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
     * @var string $sales_promotion 促销活动
     */
    public string $sales_promotion;
    
    /**
     * @var string $down_payment 月付
     */
    public string $down_payment;
    
    /**
     * @var string $mortgage 首付
     */
    public string $mortgage;
    
    /**
     * @var string $daily_mortgage 日付
     */
    public string $daily_mortgage;
    
}