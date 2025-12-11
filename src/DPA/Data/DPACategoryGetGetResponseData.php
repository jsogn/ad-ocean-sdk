<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPACategoryGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPACategoryGetGetResponseListData> $list json返回值
     */
    public array $list;
    
}