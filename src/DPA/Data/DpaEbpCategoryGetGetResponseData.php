<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpCategoryGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DpaEbpCategoryGetGetResponseListData> $list 
     */
    public array $list;

}