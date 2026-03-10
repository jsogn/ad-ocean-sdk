<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 每页最多50条
class ToolsEbpSubjectListGetParamPaginationData extends Data
{

    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;

    /**
     * @var int $page_size 页面数据量，默认值：10
     */
    public int $page_size;

}