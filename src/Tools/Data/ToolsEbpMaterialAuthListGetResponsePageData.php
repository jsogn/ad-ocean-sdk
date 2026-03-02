<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 页码
class ToolsEbpMaterialAuthListGetResponsePageData extends Data
{

    /**
     * @var int $total_page 总页数
     */
    public int $total_page;

    /**
     * @var int $total_number 总数
     */
    public int $total_number;

}