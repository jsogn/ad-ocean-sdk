<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 维度数据
class ReportIntergratedGetResponseListDimensionsData extends Data
{

    /**
     * @var string $stat_datetime 时间。如果分组条件包括STAT_GROUP_BY_TIME_MONTH、STAT_GROUP_BY_TIME_WEEK、STAT_GROUP_BY_TIME_DAY、STAT_GROUP_BY_TIME_HOUR,此字段有值
     */
    public string $stat_datetime;
    
    /**
     * @var int $advertiser_id 广告主ID。如果分组条件中包括STAT_GROUP_BY_ADVERTISER_ID、STAT_GROUP_BY_CAMPAIGN_ID、STAT_GROUP_BY_AD_ID、STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public int $advertiser_id;
    
    /**
     * @var string $campaign_name 广告组名称。如果分组条件中包括STAT_GROUP_BY_CAMPAIGN_ID、STAT_GROUP_BY_AD_ID、STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public string $campaign_name;
    
    /**
     * @var int $campaign_id 广告组id。如果分组条件中包括STAT_GROUP_BY_CAMPAIGN_ID、STAT_GROUP_BY_AD_ID、STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public int $campaign_id;
    
    /**
     * @var string $ad_name 广告计划名称。如果分组条件中包括STAT_GROUP_BY_AD_ID、STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public string $ad_name;
    
    /**
     * @var int $ad_id 广告计划id。如果分组条件中包括STAT_GROUP_BY_AD_ID、STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public int $ad_id;
    
    /**
     * @var int $creative_id 创意id。如果分组条件中包括STAT_GROUP_BY_CREATIVE_ID,此字段有值
     */
    public int $creative_id;
    
    /**
     * @var string $bidword 关键词名称。如果分组条件中包括STAT_GROUP_BY_BIDWORD_ID,此字段有值
     */
    public string $bidword;
    
    /**
     * @var int $bidword_id 关键词id。如果分组条件中包括STAT_GROUP_BY_BIDWORD_ID,此字段有值
     */
    public int $bidword_id;
    
    /**
     * @var string $query 搜索词。如果分组条件中包括STAT_GROUP_BY_QUERY,此字段有值
     */
    public string $query;
    
    /**
     * @var string $pricing 出价方式。如果分组条件中包括STAT_GROUP_BY_PRICING,此字段有值
     */
    public string $pricing;
    
    /**
     * @var string $image_mode 素材类型。如果分组条件中包括STAT_GROUP_BY_IMAGE_MODE,此字段有值
     */
    public string $image_mode;
    
    /**
     * @var string $inventory 广告首选位置。如果分组条件中包括STAT_GROUP_BY_INVENTORY,此字段有值
     */
    public string $inventory;
    
    /**
     * @var string $campaign_type 广告组类型。如果分组条件中包括STAT_GROUP_BY_CAMPAIGN_TYPE,此字段有值
     */
    public string $campaign_type;
    
    /**
     * @var string $creative_material_mode 创意类型。如果分组条件中包括STAT_GROUP_BY_CREATIVE_MATERIAL_MODE,此字段有值
     */
    public string $creative_material_mode;
    
    /**
     * @var string $external_action 转化类型。如果分组条件中包括STAT_GROUP_BY_EXTERNAL_ACTION,此字段有值
     */
    public string $external_action;
    
    /**
     * @var string $landing_type 推广类型。如果分组条件中包括STAT_GROUP_BY_LANDING_TYPE,此字段有值
     */
    public string $landing_type;
    
    /**
     * @var string $pricing_category 广告类型。如果分组条件中包括STAT_GROUP_BY_PRICING_CATEGORY,此字段有值
     */
    public string $pricing_category;
    
    /**
     * @var string $province_name 省份。如果分组条件中包括STAT_GROUP_BY_PROVINCE_NAME,此字段有值
     */
    public string $province_name;
    
    /**
     * @var string $city_name 城市。如果分组条件中包括STAT_GROUP_BY_CITY_NAME，,此字段有值（必须和STAT_GROUP_BY_PROVINCE_NAME一起存在）
     */
    public string $city_name;
    
    /**
     * @var string $gender 性别。如果分组条件中包括STAT_GROUP_BY_GENDER,此字段有值
     */
    public string $gender;
    
    /**
     * @var string $age 年龄。如果分组条件中包括STAT_GROUP_BY_AGE,此字段有值
     */
    public string $age;
    
    /**
     * @var string $platform 平台。如果分组条件中包括STAT_GROUP_BY_PLATFORM,此字段有值
     */
    public string $platform;
    
    /**
     * @var string $ac 网络类型。如果分组条件中包括STAT_GROUP_BY_AC,此字段有值
     */
    public string $ac;
    
    /**
     * @var int $material_id 素材ID。如果分组条件中包括STAT_GROUP_BY_MATERIAL_ID,此字段有值
     */
    public int $material_id;
    
    /**
     * @var int $playable_id 试玩素材ID。如果分组条件中包括STAT_GROUP_BY_PLAYABLE_ID,此字段有值
     */
    public int $playable_id;
    
    /**
     * @var string $playable_name 试玩素材名称。如果分组条件中包括STAT_GROUP_BY_PLAYABLE_ID,此字段有值
     */
    public string $playable_name;
    
    /**
     * @var string $playable_url 试玩素材链接。如果分组条件中包括STAT_GROUP_BY_PLAYABLE_ID,此字段有值
     */
    public string $playable_url;
    
    /**
     * @var string $playable_orientation 试玩素材展示方向。如果分组条件中包括STAT_GROUP_BY_PLAYABLE_ID,此字段有值
     */
    public string $playable_orientation;
    
    /**
     * @var string $playable_preview_url 试玩素材预览链接。如果分组条件中包括STAT_GROUP_BY_PLAYABLE_ID,此字段有值
     */
    public string $playable_preview_url;
    
}