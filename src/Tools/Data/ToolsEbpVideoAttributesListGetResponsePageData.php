<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 分页信息
class ToolsEbpVideoAttributesListGetResponsePageData extends Data
{

    /**
     * @var int $page 页数
     */
    public int $page;

    /**
     * @var int $page_size 页面大小
     */
    public int $page_size;

    /**
     * @var int $total_page 总页数
     */
    public int $total_page;

    /**
     * @var int $total_number 总数
     */
    public int $total_number;

}