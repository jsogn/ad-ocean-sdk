<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Params;

use AdOceanSdk\RequestParams;

class CustomerCenterAdvertiserListGetParams extends RequestParams
{

    /**
     * @var int $cc_account_id 纵横组织id，通过【获取已授权账户】接口获取
     */
    public int $cc_account_id;
    
    /**
     * @var string $account_source 账户类型，可选值：AD广告主账号、ENTERPRISE企业号，默认值：AD
     */
    public string $account_source;
    
    /**
     * @var \AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\Majordomo\Data\CustomerCenterAdvertiserListGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码默认值:1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10，最大值：100
     */
    public int $page_size;
    
}