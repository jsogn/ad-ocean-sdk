<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AsyncTaskGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Report\Data\AsyncTaskGetResponseListData> $list data中的值，以下为list中每个元素的字段
     */
    public array $list;
    
}