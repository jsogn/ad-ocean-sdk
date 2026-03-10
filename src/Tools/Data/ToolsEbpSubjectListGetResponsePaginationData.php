<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 分页信息
class ToolsEbpSubjectListGetResponsePaginationData extends Data
{

    /**
     * @var int $total 总数
     */
    public int $total;

    /**
     * @var bool $has_more 是否有下一页，true：仍有下一页数据；false：没有下一页数据
     */
    public bool $has_more;

}