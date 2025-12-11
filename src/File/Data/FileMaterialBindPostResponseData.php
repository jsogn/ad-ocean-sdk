<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileMaterialBindPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileMaterialBindPostResponseFailListData> $fail_list 推送失败列表
     */
    public array $fail_list;
    
}