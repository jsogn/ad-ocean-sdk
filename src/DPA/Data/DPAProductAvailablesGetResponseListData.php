<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库信息列表
class DPAProductAvailablesGetResponseListData extends Data
{

    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;
    
    /**
     * @var string $name 商品库名称
     */
    public string $name;
    
    /**
     * @var string $product_industry 商品库行业类别，详见【附录-商品库行业类别】
     */
    public string $product_industry;
    
}