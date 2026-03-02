<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpClueProductDeletePostResponseDataData extends Data
{

    /**
     * @var array<int> $product_ids 删除成功的商品ID集合
     */
    public array $product_ids;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpClueProductDeletePostResponseDataErrorsData> $errors 删除失败的商品ID集合及错误信息
     */
    public array $errors;

}