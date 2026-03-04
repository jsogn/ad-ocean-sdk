<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 分页信息
class ToolsEbpAssetAuthListGetResponsePageData extends Data
{

    /**
     * @var int $total 总数
     */
    public int $total;

    /**
     * @var bool $has_more 
     */
    public bool $has_more;

}