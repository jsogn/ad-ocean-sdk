<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class CDPBrandGetResponseBrandCategoryInfoChildrenData extends Data
{

    /**
     * @var string $id 二级类别id: yuntu_category_id
     */
    public string $id;
    
    /**
     * @var string $lable 二级类别标签
     */
    public string $lable;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandCategoryInfoChildrenChildrenData> $children 
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandCategoryInfoChildrenChildrenData::class)]
    public array $children;
    
}