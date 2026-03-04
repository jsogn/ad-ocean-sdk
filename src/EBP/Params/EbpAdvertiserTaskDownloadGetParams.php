<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Params;

use AdOceanSdk\RequestParams;

class EbpAdvertiserTaskDownloadGetParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 旧版巨量引擎工作台账户ID
     */
    public int $enterprise_organization_id;

    /**
     * @var int $task_id 任务 id
     */
    public int $task_id;

}