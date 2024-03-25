<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class DPAClueProductListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $product_ids 商品ID精确搜索
     */
    public array $product_ids;
    
    /**
     * @var string $product_name 商品名称模糊搜索
     */
    public string $product_name;
    
    /**
     * @var array<string> $audit_status 商品审核状态 可选值:
     */
    public array $audit_status;
    
    /**
     * @var array<int> $category_ids 类目id，会级联查询所有叶子类目
     */
    public array $category_ids;
    
    /**
     * @var string $category_name 类目名称，支持模糊搜索
     */
    public string $category_name;
    
    /**
     * @var array<string> $completion_status 商品必填字段完整性
     */
    public array $completion_status;
    
    /**
     * @var string $product_id_or_name_search 商品ID或商品名称查询
     */
    public string $product_id_or_name_search;
    
    /**
     * @var array<string> $statuses 可投状态过滤
     */
    public array $statuses;
    
    /**
     * @var array<string> $rels 商品权限关系过滤，允许值：
     */
    public array $rels;
    
}