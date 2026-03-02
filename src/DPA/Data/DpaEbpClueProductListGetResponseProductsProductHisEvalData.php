<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 历史销量/评价
class DpaEbpClueProductListGetResponseProductsProductHisEvalData extends Data
{

    /**
     * @var int $bought 购买量
     */
    public int $bought;

    /**
     * @var int $mark 评分
     */
    public int $mark;

    /**
     * @var int $comments 评论数
     */
    public int $comments;

}