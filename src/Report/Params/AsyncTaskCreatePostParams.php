<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class AsyncTaskCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $task_name 任务名称。最大长度 25 个字符，不能为空字符。
     */
    public string $task_name;
    
    /**
     * @var string $force true/false。是否强制生成新的任务（不复用之前任务的结果）。
     */
    public string $force;
    
    /**
     * @var string $task_type 任务类型。可选值：“REPORT”（普通报表），"REPORT_DPA"（DPA 报表），"REPORT_BIDWORD"（关键词/搜索词报表）。
     */
    public string $task_type;
    
    /**
     * @var \AdOceanSdk\Report\Data\AsyncTaskCreatePostParamTaskParamsData $task_params 任务的参数。
     */
    public \AdOceanSdk\Report\Data\AsyncTaskCreatePostParamTaskParamsData $task_params;
    
}