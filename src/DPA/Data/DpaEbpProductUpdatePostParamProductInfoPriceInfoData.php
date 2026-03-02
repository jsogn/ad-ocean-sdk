<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpProductUpdatePostParamProductInfoPriceInfoData extends Data
{

    /**
     * @var float $value 
     */
    public float $value;

    /**
     * @var float $price 
     */
    public float $price;

    /**
     * @var string $price_unit 
     */
    public string $price_unit;

    /**
     * @var float $saving 
     */
    public float $saving;

    /**
     * @var float $discount 
     */
    public float $discount;

    /**
     * @var string $sales_promotion 
     */
    public string $sales_promotion;

    /**
     * @var string $down_payment 
     */
    public string $down_payment;

    /**
     * @var string $mortgage 
     */
    public string $mortgage;

    /**
     * @var string $daily_mortgage 
     */
    public string $daily_mortgage;

}