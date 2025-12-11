<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 品牌所属类别
class CDPBrandGetResponseBrandCategoryInfoData extends Data
{

    /**
     * @var string $id 一级类别id: yuntu_category_id
     */
    public string $id;
    
    /**
     * @var string $lable 一级类别标签
     */
    public string $lable;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandCategoryInfoChildrenData> $children 
     */
    public array $children;
    
}