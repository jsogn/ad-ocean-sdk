<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class EbpAdvertiserTaskCreatePostResponseData extends Data
{

    /**
     * @var int $task_id 任务id
     */
    public int $task_id;

}