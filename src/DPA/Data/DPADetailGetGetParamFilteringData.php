<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class DPADetailGetGetParamFilteringData extends Data
{

    /**
     * @var array<int> $dpa_categories 商品行业分类，长度限制 50，使用的三级行业ID ，可从【获取行业列表】接口获取
     */
    public array $dpa_categories;
    
    /**
     * @var int $is_recommend 是否系统推荐，1表示只看系统推荐，0表示不限系统推荐，默认为0
     */
    public int $is_recommend;
    
    /**
     * @var int $product_id 商品ID，精准匹配，与product_name（商品名称）同时传入，以商品ID为准
     */
    public int $product_id;
    
    /**
     * @var string $product_name 商品名称，模糊匹配，长度限制50字，与product_id（商品ID）同时传入，以商品ID为准
     */
    public string $product_name;
    
    /**
     * @var int $status 商品投放状态，枚举值：0代表不可投放，1代表可投放
     */
    public int $status;
    
}