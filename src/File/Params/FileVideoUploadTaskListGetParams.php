<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoUploadTaskListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型，允许值：ADVERTISER 广告主、AGENT 代理商
     */
    public string $account_type;
    
    /**
     * @var array<int> $task_ids 任务id列表，单次最多支持100个任务id
     */
    public array $task_ids;
    
}