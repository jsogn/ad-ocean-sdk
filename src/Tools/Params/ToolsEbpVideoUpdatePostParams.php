<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpVideoUpdatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 企业版组织（默认值）
     */
    public string $account_type;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpVideoUpdatePostParamVideosData> $videos 视频列表，限制最多100个
     */
    public array $videos;

}