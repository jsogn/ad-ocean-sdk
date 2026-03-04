<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpAssetAuthCancelPostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，枚举值：EBP 升级版巨量引擎工作台
     */
    public string $account_type;

    /**
     * @var array<int> $opt_ids 授权记录ID，上限200，可通过查询共享范围接口获取
     */
    public array $opt_ids;

}