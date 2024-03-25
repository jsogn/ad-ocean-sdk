<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品类目信息
class DPAClueProductDetailGetResponseProductsCategoryData extends Data
{

    /**
     * @var int $first_category_id 一级类目ID
     */
    public int $first_category_id;
    
    /**
     * @var string $first_category_name 一级类目名称
     */
    public string $first_category_name;
    
    /**
     * @var int $second_category_id 二级类目ID
     */
    public int $second_category_id;
    
    /**
     * @var string $second_category_name 二级类目名称
     */
    public string $second_category_name;
    
    /**
     * @var int $third_category_id 三级类目ID
     */
    public int $third_category_id;
    
    /**
     * @var string $third_category_name 三级类目名称
     */
    public string $third_category_name;
    
    /**
     * @var int $fourth_category_id 四级类目ID
     */
    public int $fourth_category_id;
    
    /**
     * @var string $fourth_category_name 四级类目名称
     */
    public string $fourth_category_name;
    
}