<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class AgentTransferTransactionRecordGetParams extends RequestParams
{

    /**
     * @var int $agent_id 代理商id
     */
    public int $agent_id;
    
    /**
     * @var string $start_date 开始时间，格式 yyyy-MM-dd，最远可以查询3年内的数据
     */
    public string $start_date;
    
    /**
     * @var string $end_date 截止时间，格式 yyyy-MM-dd
     */
    public string $end_date;
    
    /**
     * @var \AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetParamFilteringData $filtering 过滤器
     */
    public \AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小
     */
    public int $page_size;
    
}