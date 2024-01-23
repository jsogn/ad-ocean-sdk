<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 单项服务名称，5-10组
class NativeAnchorDetailGetResponseListInsuranceEnterpriseAnchorSingleProductInfoData extends Data
{

    /**
     * @var string $single_product_name 单项服务名称，0/15
     */
    public string $single_product_name;
    
    /**
     * @var string $single_product_detail 服务描述，0/10
     */
    public string $single_product_detail;
    
}