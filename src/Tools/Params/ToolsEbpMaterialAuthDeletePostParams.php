<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMaterialAuthDeletePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 升级版工作台（默认值）
     */
    public string $account_type;

    /**
     * @var array<int> $auth_ids 取消的共享记录ID列表，通过EBP【升级版工作台查询素材共享范围】接口获取，数量范围[1,20]
     */
    public array $auth_ids;

}