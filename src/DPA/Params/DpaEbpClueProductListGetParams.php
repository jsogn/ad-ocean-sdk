<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpClueProductListGetParams extends RequestParams
{

    /**
     * @var int $account_id 升级版组织id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 升级版组织
     */
    public string $account_type;

    /**
     * @var array<int> $product_ids 商品id精确搜索
     */
    public array $product_ids;

    /**
     * @var string $product_name 商品名模糊搜索
     */
    public string $product_name;

    /**
     * @var array<string> $audit_status 审核状态 可选值: AUDIT_STATUS_APPROVE 审核通过AUDIT_STATUS_INIT 审核中AUDIT_STATUS_REJECT 审核未通过
     */
    public array $audit_status;

    /**
     * @var array<int> $category_ids 类目id，会级联查询所有叶子节点
     */
    public array $category_ids;

    /**
     * @var string $product_id_or_name_search 商品id精确 or 商品名称 （商品id即为工作台上19位的商品数字）
     */
    public string $product_id_or_name_search;

    /**
     * @var array<string> $statuses 可投状态过滤，可选值: STATUS_OFFLINE 不可投放状态STATUS_ONLINE 可投放状态
     */
    public array $statuses;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetParamAssetQueryScopeData $asset_query_scope EBP资产查询范围
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductListGetParamAssetQueryScopeData $asset_query_scope;

    /**
     * @var int $offset 
     */
    public int $offset;

    /**
     * @var int $limit 
     */
    public int $limit;

}