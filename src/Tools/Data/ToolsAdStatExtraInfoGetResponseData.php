<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 计划学习期状态列表
class ToolsAdStatExtraInfoGetResponseData extends Data
{

    /**
     * @var int $ad_id 计划ID
     */
    public int $ad_id;
    
    /**
     * @var string $learning_phase 学习期状态允许值：DEFAULT（默认，不在学习期中）、LEARNING（学习中）、LEARNED（学习成功）、LEARN_FAILED（学习失败),具体可以参考此文档的说明：关于学习期
     */
    public string $learning_phase;
    
}