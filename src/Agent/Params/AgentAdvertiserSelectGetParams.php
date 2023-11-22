<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Params;

use AdOceanSdk\RequestParams;

class AgentAdvertiserSelectGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 必填,代理商ID
     */
    public int $advertiser_id;

    /**
     * @var array<int> $company_ids 客户id列表，可用来过滤某个客户的adv
     */
    public array $company_ids;

    /**
     * @var int $page 页码.默认值:1注：page+page_size与cursor+count为两种分页方式page+page_size适用于获取数据记录数<10000的场景
     */
    public int $page;

    /**
     * @var int $page_size 页面数据量.默认值:100注：page+page_size与cursor+count为两种分页方式page+page_size适用于获取数据记录数<10000的场景
     */
    public int $page_size;

    /**
     * @var int $cursor 页码游标值，第一次拉取，无需入参注：page+page_size与cursor+count为两种分页方式cursor+count适用于获取数据记录数≥10000的场景
     */
    public int $cursor;

    /**
     * @var int $count 页面数据量，页面数据量注：page+page_size与cursor+count为两种分页方式cursor+count适用于获取数据记录数≥10000的场景
     */
    public int $count;

}