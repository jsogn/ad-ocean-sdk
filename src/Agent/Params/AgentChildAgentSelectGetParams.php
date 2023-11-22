<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Params;

use AdOceanSdk\RequestParams;

class AgentChildAgentSelectGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 代理商ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $page 页码.默认值:1
     */
    public string $page;
    
    /**
     * @var string $page_size 页面数据量.默认值:100
     */
    public string $page_size;
    
}