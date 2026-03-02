<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMaterialAuthCreatePostParams extends RequestParams
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
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMaterialAuthCreatePostParamTargetEbpsData> $target_ebps 被共享的EBP组织，数量限制[1,20]
     */
    public array $target_ebps;

    /**
     * @var string $material_type 素材类型，可选值: VIDEO 视频（默认值）
     */
    public string $material_type;

}