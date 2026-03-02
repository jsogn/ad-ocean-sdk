<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 删除失败的商品ID集合及错误信息
class DpaEbpClueProductDeletePostResponseDataErrorsData extends Data
{

    /**
     * @var int $product_id 商品ID
     */
    public int $product_id;

    /**
     * @var string $error_message 错误信息（主要的可能错误为商品关联了在投计划）
     */
    public string $error_message;

}