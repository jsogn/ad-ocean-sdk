<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;

class ResponsePageInfoData extends Data
{
    /**
     * @var int 页码
     */
    public int $page;

    /**
     * @var int 页面大小，即每页展示的数据量
     */
    public int $page_size;

    /**
     * @var int 总数
     */
    public int $total_number;

    /**
     * @var int 总页数
     */
    public int $total_page;
}