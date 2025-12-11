<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeDetailGetResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;
    
    /**
     * @var int $ad_id 计划ID
     */
    public int $ad_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseAdDataData $ad_data 基础创意信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseAdDataData $ad_data;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeListData> $creative_list 自定义素材信息
     */
    public array $creative_list;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeData $creative 程序化素材信息
     */
    public \AdOceanSdk\Advertising\Data\CreativeDetailGetResponseCreativeData $creative;
    
}