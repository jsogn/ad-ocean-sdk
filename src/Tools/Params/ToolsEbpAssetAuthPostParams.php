<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpAssetAuthPostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，允许值：
     */
    public string $account_type;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostParamAuthTargetsData> $auth_targets 共享信息
     */
    public array $auth_targets;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostParamAssetsData> $assets 授权资产范围，上限20
     */
    public array $assets;

}