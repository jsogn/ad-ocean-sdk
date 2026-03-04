<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class EbpAdvertiserTaskListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\EBP\Data\EbpAdvertiserTaskListGetResponseListData> $list 任务列表
     */
    public array $list;

}