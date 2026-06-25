<?php

declare(strict_types=1);

namespace AdOceanSdk\OcProject\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材维度审核建议列表
class ProjectRejectReasonGetResponseListMaterialRejectData extends Data
{

    /**
     * @var string $type 素材类型
     */
    public string $type;

    /**
     * @var string $item 根据不同素材类型返回相应的值
     */
    public string $item;

    /**
     * @var array<string> $reject_reason 拒绝建议
     */
    public array $reject_reason;

    /**
     * @var array<string> $suggestion 审核建议
     */
    public array $suggestion;

    /**
     * @var string $audit_platform 审核来源类型，返回值：AD 广告审核、CONTENT 内容审核 可选值: AD 广告审核CONTENT 内容审核
     */
    public string $audit_platform;

}