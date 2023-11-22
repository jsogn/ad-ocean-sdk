<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 自定内容
class AudiencePackageGetResponseAudiencePackagesAudienceData extends Data
{

    /**
     * @var array<int> $retargeting_tags 定向人群包列表，内容为人群包id
     */
    public array $retargeting_tags;
    
    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表，内容为人群包id
     */
    public array $retargeting_tags_exclude;
    
    /**
     * @var string $gender 受众性别, 详见【附录-受众性别】允许值:GENDER_FEMALE,GENDER_MALE,NONE
     */
    public string $gender;
    
    /**
     * @var array<string> $age 受众年龄区间, 详见【附录-受众年龄区间】允许值:AGE_BETWEEN_18_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_40,AGE_BETWEEN_41_49,AGE_ABOVE_50或：
     */
    public array $age;
    
    /**
     * @var string $android_osv 受众最低android版本(当推广应用下载Android时选填,其余情况不填), 详见【附录-受众android版本】
     */
    public string $android_osv;
    
    /**
     * @var string $ios_osv 受众最低ios版本(当推广应用下载iOS时选填,其余情况不填), 详见【附录-受众ios版本】
     */
    public string $ios_osv;
    
    /**
     * @var array<string> $carrier 受众运营商, 详见【附录-受众运营商类型】允许值: "MOBILE", "UNICOM", "TELCOM"
     */
    public array $carrier;
    
    /**
     * @var array<string> $ac 受众网络类型, 详见【附录-受众网络类型】
     */
    public array $ac;
    
    /**
     * @var array<string> $device_brand 受众手机品牌, 详见【附录-手机品牌】
     */
    public array $device_brand;
    
    /**
     * @var array<string> $article_category 受众文章分类, 详见【附录-受众文章分类】
     */
    public array $article_category;
    
    /**
     * @var array<string> $platform 受众平台(当推广目的landing_type=APP时,不填,且为保证投放效果,平台类型定向PC与移动端互斥)，android_osv或ios_osv非空时，必填。详见【附录-受众平台类型】
     */
    public array $platform;
    
    /**
     * @var json $app_category APP行为定向,分类集合, 详见【附件-app_category.json】
     */
    public json $app_category;
    
    /**
     * @var json $app_ids APP行为定向,APP集合
     */
    public json $app_ids;
    
    /**
     * @var array<int> $launch_price 手机价格定向,传入价格区间，最高传入11000（表示1w以上）传值示例 "launch_price": [2000, 11000]，表示2000元以上
     */
    public array $launch_price;
    
    /**
     * @var string $interest_action_mode 行为兴趣选择允许值：UNLIMITED（不限）,CUSTOM（自定义）,RECOMMEND（系统推荐）
     */
    public string $interest_action_mode;
    
    /**
     * @var array<string> $action_scene 行为场景
     */
    public array $action_scene;
    
    /**
     * @var int $action_days 行为天数允许值：7, 15, 30, 60, 90, 180, 365
     */
    public int $action_days;
    
    /**
     * @var array<int> $action_categories 行为类目
     */
    public array $action_categories;
    
    /**
     * @var array<int> $action_words 行为关键词
     */
    public array $action_words;
    
    /**
     * @var array<int> $interest_categories 兴趣分类
     */
    public array $interest_categories;
    
    /**
     * @var array<int> $interest_words 兴趣关键词, 传入具体的词id，非兴趣词包id，可以通过词包相关接口或者兴趣关键词word2id接口获取词id，一个计划下最多创建1000个关键词。
     */
    public array $interest_words;
    
    /**
     * @var array<int> $business_ids 商圈ID数组
     */
    public array $business_ids;
    
    /**
     * @var string $district 地域类型允许值:CITY省市、COUNTY区县、BUSINESS_DISTRICT商圈、REGION行政区域、OVERSEA海外区域、NONE不限
     */
    public string $district;
    
    /**
     * @var string $region_version 行政区域版本号
     */
    public string $region_version;
    
    /**
     * @var array<int> $city 地域定向省市或者区县列表
     */
    public array $city;
    
    /**
     * @var string $location_type 受众位置类型,当city和district有值时，该字段必填，详见【附录-受众位置类型】
     */
    public string $location_type;
    
    /**
     * @var string $superior_popularity_type 精选流量包，详见【附录-精选流量包】
     */
    public string $superior_popularity_type;
    
    /**
     * @var array $flow_package 定向流量包ID数组
     */
    public array $flow_package;
    
    /**
     * @var array $exclude_flow_package 排除流量包ID数组
     */
    public array $exclude_flow_package;
    
    /**
     * @var array<string> $device_type 设备类型。允许值是：MOBILE,PAD。缺省表示不限设备类型。穿山甲已经全量，投放范围为默认时需要有白名单权限才可以
     */
    public array $device_type;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesAudienceGeolocationData> $geolocation 地图位置，district为BUSINESS_DISTRICT才有效
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesAudienceGeolocationData::class)]
    public array $geolocation;
    
    /**
     * @var array<string> $auto_extend_targets 智能放量定向允许值：REGION（地域）,GENDER（性别）,AGE（年龄）,CUSTOM_AUDIENCE（自定义人群）
     */
    public array $auto_extend_targets;
    
    /**
     * @var array<int> $aweme_fans_numbers 账号粉丝相似人群（添加抖音账号，会将广告投放给对应账号的相似人群粉丝）
     */
    public array $aweme_fans_numbers;
    
    /**
     * @var int $filter_aweme_abnormal_active 过滤高活跃用户允许值：0:表示不过滤，1:表示过滤
     */
    public int $filter_aweme_abnormal_active;
    
    /**
     * @var int $filter_aweme_fans_count 过滤高关注数用户，例如"filter_aweme_fans_count": 1000表示过滤粉丝数在1000以上的用户
     */
    public int $filter_aweme_fans_count;
    
    /**
     * @var int $own_aweme_number 抖音号，过滤自己的粉丝
     */
    public int $own_aweme_number;
    
    /**
     * @var int $filter_own_aweme_fans 过滤自己的粉丝，允许值：0表示不过滤，1表示过滤
     */
    public int $filter_own_aweme_fans;
    
    /**
     * @var string $aweme_fan_time_scope 粉丝互动行为时间范围
     */
    public string $aweme_fan_time_scope;
    
    /**
     * @var array $bind_info 定向包绑定计划信息
     */
    public array $bind_info;
    
    /**
     * @var int $ad_id 计划ID
     */
    public int $ad_id;
    
    /**
     * @var array<int> $aweme_fan_accounts 抖音号id，与aweme_fan_behaviors同时设置才会生效（抖音达人定向）
     */
    public array $aweme_fan_accounts;
    
    /**
     * @var array<int> $aweme_fan_categories 抖音类目id，与aweme_fan_behaviors同时设置才会生效（抖音达人定向）
     */
    public array $aweme_fan_categories;
    
    /**
     * @var array<string> $aweme_fan_behaviors 抖音用户行为类型, 详见【附录-抖音用户行为类型】允许值:"FOLLOWED_USER","COMMENTED_USER","LIKED_USER","SHARED_USER"（抖音达人定向）
     */
    public array $aweme_fan_behaviors;
    
}