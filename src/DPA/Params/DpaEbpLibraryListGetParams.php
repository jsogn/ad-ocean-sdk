<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpLibraryListGetParams extends RequestParams
{

    /**
     * @var int $account_id 升级版组织id
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP升级版组织
     */
    public string $account_type;

    /**
     * @var int $store_type 商品库类型，具体枚举可参考【附录-商品库枚举说明】
     */
    public int $store_type;

    /**
     * @var string $name_or_id 商品库名称模糊搜索或商品库ID精确搜索
     */
    public string $name_or_id;

    /**
     * @var int $offset 
     */
    public int $offset;

    /**
     * @var int $limit 
     */
    public int $limit;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpLibraryListGetParamAssetQueryScopeData $asset_query_scope EBP资产查询范围
     */
    public \AdOceanSdk\DPA\Data\DpaEbpLibraryListGetParamAssetQueryScopeData $asset_query_scope;

}