<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpVideoDeletePostParams extends RequestParams
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
     * @var array<int> $material_ids 待删除的视频对应素材ID列表，数量限制[1,100]
     */
    public array $material_ids;

}