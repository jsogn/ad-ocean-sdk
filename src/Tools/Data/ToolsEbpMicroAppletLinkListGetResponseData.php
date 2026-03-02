<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序详情
class ToolsEbpMicroAppletLinkListGetResponseData extends Data
{

    /**
     * @var int $total 资产总数
     */
    public int $total;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetResponseLinksData> $links 字节小程序链接详情
     */
    public array $links;

}