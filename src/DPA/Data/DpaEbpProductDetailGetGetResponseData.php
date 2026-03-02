<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpProductDetailGetGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpProductDetailGetGetResponseListData> $list 商品库商品列表
     */
    public array $list;

}