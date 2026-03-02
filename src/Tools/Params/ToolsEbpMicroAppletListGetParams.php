<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMicroAppletListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var int $account_type 账户类型，允许值：
     */
    public int $account_type;

    /**
     * @var string $asset_management_scope 查询资产范围，允许值：DIRECT 直属TRAVERSE 全部
     */
    public string $asset_management_scope;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletListGetParamFilteringData $filtering;

    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，默认值为10，最大值100
     */
    public int $page_size;

}