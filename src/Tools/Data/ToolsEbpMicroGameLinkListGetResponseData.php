<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 详情结果
class ToolsEbpMicroGameLinkListGetResponseData extends Data
{

    /**
     * @var int $total 总数
     */
    public int $total;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetResponseLinksData> $links 链接详情
     */
    public array $links;

}