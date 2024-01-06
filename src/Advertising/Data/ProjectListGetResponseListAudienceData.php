<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 定向设置
class ProjectListGetResponseListAudienceData extends Data
{

    /**
     * @var string $dpa_city 地域匹配-商品所在城市（OFF表示不启用，ON表示启用）
     */
    public string $dpa_city;

    /**
     * @var string $dpa_rta_switch RTA重定向开关（OFF表示不启用，ON表示启用）
     */
    public string $dpa_rta_switch;

    /**
     * @var string $dpa_rta_recommend_type RTA推荐逻辑
     */
    public string $dpa_rta_recommend_type;

    /**
     * @var int $audience_package_id 定向包ID如果同时传定向包ID和自定义用户定向参数时，仅定向包中的定向生效
     */
    public int $audience_package_id;

    /**
     * @var string $district 地域类型，枚举值:CITY省市、COUNTY区县、BUSINESS_DISTRICT商圈、REGION行政区域、OVERSEA海外区域、NONE不限
     */
    public string $district;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectListGetResponseListAudienceGeolocationData> $geolocation 从地图添加(地图位置)
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectListGetResponseListAudienceGeolocationData::class)]
    public ?array $geolocation;

    /**
     * @var string $region_recommend 地域智能放量定向，ON为开启、OFF为关闭
     */
    public string $region_recommend;

    /**
     * @var string $region_version 行政区域版本号
     */
    public string $region_version;

    /**
     * @var array<int> $city 地域定向省市或者区县列表，当district=CITY/COUNTY/REGION/OVERSEA时district =CITY/COUNTY时，详见【附件-city.json】district =REGION/OVERSEA时，通过【获取行政信息】接口获取
     */
    public ?array $city;

    /**
     * @var string $location_type 位置类型枚举值：CURRENT正在该地区的用户，HOME居住在该地区的用户，TRAVEL到该地区旅行的用户，ALL该地区内的所有用户
     */
    public string $location_type;

    /**
     * @var string $gender 性别， 详见【附录-受众性别】
     */
    public string $gender;

    /**
     * @var array<string> $age 年龄， 允许值:AGE_BETWEEN_18_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_40,AGE_BETWEEN_41_49,AGE_ABOVE_50或：AGE_BETWEEN_18_19,AGE_BETWEEN_20_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_35,AGE_BETWEEN_36_40,AGE_BETWEEN_41_45,AGE_BETWEEN_46_50,AGE_BETWEEN_51_55,AGE_BETWEEN_56_59,AGE_ABOVE_60
     */
    public ?array $age;

    /**
     * @var array<int> $retargeting_tags_include 定向人群包列表（自定义人群）
     */
    public ?array $retargeting_tags_include;

    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表（自定义人群）
     */
    public ?array $retargeting_tags_exclude;

    /**
     * @var string $interest_action_mode 行为兴趣，枚举值：UNLIMITED不限、CUSTOM自定义、RECOMMEND系统推荐
     */
    public string $interest_action_mode;

    /**
     * @var array<string> $action_scene 行为场景，枚举值：见【附录-枚举值】
     */
    public ?array $action_scene;

    /**
     * @var int $action_days 用户发生行为天数，枚举值：7、15、30、60、90、180、365用户发生行为天数
     */
    public int $action_days;

    /**
     * @var array<int> $action_categories 行为类目词，行为类目可以通过【工具-行为兴趣词管理-行为类目查询】获取行为类目词
     */
    public ?array $action_categories;

    /**
     * @var array<int> $action_words 行为关键词，行为类目可以通过【工具-行为兴趣词管理-行为关键词查询】获取行为关键词
     */
    public ?array $action_words;

    /**
     * @var array<int> $interest_categories 兴趣类目词
     */
    public ?array $interest_categories;

    /**
     * @var array<int> $interest_words 兴趣关键词
     */
    public ?array $interest_words;

    /**
     * @var array<string> $aweme_fan_behaviors 抖音达人互动用户行为类型, 详见【附录-抖音用户行为类型】
     */
    public ?array $aweme_fan_behaviors;

    /**
     * @var string $aweme_fan_time_scope 抖音达人互动行为时间范围，枚举值：FIFTEEN_DAYS15天、THIRTY_DAYS30天、SIXTY_DAYS60天
     */
    public string $aweme_fan_time_scope;

    /**
     * @var array<int> $aweme_fan_categories 抖音达人分类ID列表，可通过【工具-抖音达人-查询抖音类目列表】接口获取
     */
    public ?array $aweme_fan_categories;

    /**
     * @var array<int> $aweme_fan_accounts 抖音达人ID列表，可通过【工具-抖音达人-查询抖音类目下的推荐达人】接口获取。
     */
    public ?array $aweme_fan_accounts;

    /**
     * @var string $superior_popularity_type 媒体定向，详见【附录-媒体定向】
     */
    public string $superior_popularity_type;

    /**
     * @var array<int> $flow_package 定向逻辑，可通过【工具-穿山甲流量包-获取穿山甲流量包】
     */
    public ?array $flow_package;

    /**
     * @var array<int> $exclude_flow_package 排除定向逻辑，可通过【工具-穿山甲流量包-获取穿山甲流量包】
     */
    public ?array $exclude_flow_package;

    /**
     * @var array<string> $platform 投放平台列表，枚举值：ANDROID、IOS
     */
    public ?array $platform;

    /**
     * @var string $android_osv 最低安卓版本
     */
    public string $android_osv;

    /**
     * @var string $ios_osv 最低IOS版本
     */
    public string $ios_osv;

    /**
     * @var array $device_type 设备类型，枚举值：MOBILE、PAD
     */
    public ?array $device_type;

    /**
     * @var array<string> $ac 网络类型, 详见【附录-受众网络类型】
     */
    public ?array $ac;

    /**
     * @var array<string> $carrier 运营商, 详见【附录-受众运营商类型】
     */
    public ?array $carrier;

    /**
     * @var string $hide_if_exists 过滤已安装，枚举值：UNLIMITED不限、FILTER过滤、TARGETING定向
     */
    public string $hide_if_exists;

    /**
     * @var string $hide_if_converted 过滤已转化用户枚举值：NO_EXCLUDE不限制、PROMOTION广告、PROJECT推广项目、ADVERTISER广告账户、APP应用、CUSTOMER客户、ORGANIZATION组织
     */
    public string $hide_if_converted;

    /**
     * @var string $converted_time_duration 过滤时间范围，详见【附录-过滤时间范围】
     */
    public string $converted_time_duration;

    /**
     * @var string $filter_aweme_abnormal_active 过滤高活跃用户，即过滤关注、点赞、评论行为高活跃的用户允许值：
     */
    public string $filter_aweme_abnormal_active;

    /**
     * @var int $filter_aweme_fans_count 过滤高关注数用户，例如"filter_aweme_fans_count": 1000表示过滤粉丝数在1000以上的用户
     */
    public int $filter_aweme_fans_count;

    /**
     * @var string $filter_own_aweme_fans 过滤自己的粉丝，允许值：
     */
    public string $filter_own_aweme_fans;

    /**
     * @var array<string> $device_brand 手机品牌, 详见【附录-手机品牌】
     */
    public ?array $device_brand;

    /**
     * @var array<int> $launch_price 手机价格，价格区间，最高11000（表示1w以上）
     */
    public ?array $launch_price;

    /**
     * @var array<string> $auto_extend_targets 可放开定向，枚举值：AGE年龄、REGION地域、GENDER性别、CUSTOM_AUDIENCE自定人群-定向
     */
    public ?array $auto_extend_targets;

}
