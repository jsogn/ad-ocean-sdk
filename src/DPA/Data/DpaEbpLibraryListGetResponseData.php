<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpLibraryListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpLibraryListGetResponseProductLibraryListData> $product_library_list 商品库list
     */
    public array $product_library_list;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}