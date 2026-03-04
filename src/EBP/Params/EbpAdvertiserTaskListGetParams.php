<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Params;

use AdOceanSdk\RequestParams;

class EbpAdvertiserTaskListGetParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 工作台组织ID
     */
    public int $enterprise_organization_id;

    /**
     * @var array<int> $task_ids 任务 id，数量限制 [1,10]
     */
    public array $task_ids;

}