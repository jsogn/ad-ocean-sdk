<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class CDPBrandGetResponseBrandCategoryInfoChildrenChildrenData extends Data
{

    /**
     * @var string $id 三级类别id: yuntu_category_id
     */
    public string $id;
    
    /**
     * @var string $label 三级类别标签
     */
    public string $label;
    
}