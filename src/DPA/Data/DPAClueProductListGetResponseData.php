<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAClueProductListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAClueProductListGetResponseProductsData> $products 商品信息
     */
    public array $products;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}