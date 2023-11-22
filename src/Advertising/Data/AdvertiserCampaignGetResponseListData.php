<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告数组
class AdvertiserCampaignGetResponseListData extends Data
{

    /**
     * @var int $id 广告组ID
     */
    public int $id;
    
    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 广告组名称
     */
    public string $name;
    
    /**
     * @var int $budget 广告组预算
     */
    public int $budget;
    
    /**
     * @var string $budget_mode 广告组预算类型, 详见【附录-预算类型】
     */
    public string $budget_mode;
    
    /**
     * @var string $landing_type 广告组推广目的，详见【附录-推广目的类型】
     */
    public string $landing_type;
    
    /**
     * @var string $modify_time 广告组时间戳,用于更新时提交,服务端判断是否基于最新信息修改
     */
    public string $modify_time;
    
    /**
     * @var string $status 广告组状态,详见【附录-广告组状态】
     */
    public string $status;
    
    /**
     * @var string $campaign_create_time 广告组创建时间, 格式：yyyy-mm-dd hh:MM:ss
     */
    public string $campaign_create_time;
    
    /**
     * @var string $campaign_modify_time 广告组修改时间, 格式：yyyy-mm-dd hh:MM:ss
     */
    public string $campaign_modify_time;
    
    /**
     * @var string $marketing_purpose 营销目的，允许值CONVERSION行动转化、INTENTION用户意向、ACKNOWLEDGE品牌认知
     */
    public string $marketing_purpose;
    
    /**
     * @var string $delivery_related_num 广告组商品类型，详见【附录-广告组商品类型】
     */
    public string $delivery_related_num;
    
    /**
     * @var string $delivery_mode 投放类型，允许值：MANUAL（手动）、PROCEDURAL（自动，投放管家）
     */
    public string $delivery_mode;
    
    /**
     * @var string $campaign_budget_optimization 支持预算择优分配，允许值：ON开启，OFF不开启(默认值)
     */
    public string $campaign_budget_optimization;
    
    /**
     * @var string $smart_bid_type 出价方式（投放场景），允许值:常规投放SMART_BID_CUSTOM、放量投放SMART_BID_CONSERVATIVE、最大转化投放SMART_BID_NO_BID（白名单）
     */
    public string $smart_bid_type;
    
}