<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class AudiencePackageUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 定向包名称
     */
    public string $name;
    
    /**
     * @var string $description 定向包描述
     */
    public string $description;
    
    /**
     * @var string $audience_package_id 修改的定向包ID
     */
    public string $audience_package_id;
    
    /**
     * @var array<int> $retargeting_tags 定向人群包列表，内容为人群包id
     */
    public array $retargeting_tags;
    
    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表，内容为人群包id
     */
    public array $retargeting_tags_exclude;
    
    /**
     * @var string $gender 受众性别, 详见【附录-受众性别】允许值:GENDER_FEMALE、GENDER_MALE、NONE
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
     * @var array<string> $carrier 受众运营商,仅通信行业可用, 详见【附录-受众运营商类型】允许值: "MOBILE", "UNICOM", "TELCOM"
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
     * @var array<string> $platform 受众平台(当推广目的landing_type=APP时,不填,且为保证投放效果,平台类型定向PC与移动端互斥)，android_osv或ios_osv非空时，必填。详见【附录-受众平台类型】
     */
    public array $platform;
    
    /**
     * @var array<string> $auto_extend_targets 智能放量定向，该字段不为空时表示开启智能放量，传空时表示不开启智能放量允许值：REGION（地域）、GENDER（性别）、AGE（年龄）、CUSTOM_AUDIENCE（自定义人群）
     */
    public array $auto_extend_targets;
    
    /**
     * @var array<int> $launch_price 手机价格定向,传入价格区间，最高传入11000（表示1w以上）传值示例 "launch_price": [2000, 11000]，表示2000元以上
     */
    public array $launch_price;
    
    /**
     * @var string $interest_action_mode 行为兴趣选择允许值：UNLIMITED（不限）、CUSTOM（自定义）、RECOMMEND（系统推荐）
     */
    public string $interest_action_mode;
    
    /**
     * @var int $action_days 行为天数,当interest_action_mode传CUSTOM时有效允许值：7、15、30、60、90、180、365
     */
    public int $action_days;
    
    /**
     * @var array<int> $action_categories 行为类目,当interest_action_mode传CUSTOM时有效，action_categories和action_words至少传一个，否则自定义行为无效
     */
    public array $action_categories;
    
    /**
     * @var array<int> $action_words 行为关键词,当interest_action_mode传CUSTOM时有效
     */
    public array $action_words;
    
    /**
     * @var array<int> $interest_categories 兴趣分类,如果传空数组 [] 表示不限，如果只传[0]表示系统推荐,如果按兴趣类型传表示自定义，通过“查询工具”-兴趣类目/兴趣关键词查询。当interest_action_mode传CUSTOM时有效
     */
    public array $interest_categories;
    
    /**
     * @var array<int> $interest_words 兴趣关键词, 传入具体的词id，非兴趣词包id，可以通过词包相关接口或者兴趣关键词word2id接口获取词id，一个计划下最多创建1000个关键词。当interest_action_mode传CUSTOM时有效
     */
    public array $interest_words;
    
    /**
     * @var string $district 地域类型允许值:BUSINESS_DISTRICT商圈、REGION行政区域、OVERSEA海外区域、NONE不限
     */
    public string $district;
    
    /**
     * @var string $region_version 行政区域版本号。通过【获取全球国家信息】接口获取district =REGION/OVERSEA时必填
     */
    public string $region_version;
    
    /**
     * @var array<int> $city 地域定向省市或者区县列表(当传递省份ID时,旗下市县ID可省略不传)，当district=REGION/OVERSEA时必填，通过【获取行政信息】接口获取
     */
    public array $city;
    
    /**
     * @var string $location_type 受众位置类型,当city和district有值时，该字段必填，详见【附录-受众位置类型】
     */
    public string $location_type;
    
    /**
     * @var string $superior_popularity_type 媒体定向，详见【附录-媒体定向】。对于选择自定义媒体定向流量包，该字段不传，传flow_package或exclude_flow_package字段即可媒体定向仅支持穿山甲、穿山甲-精选游戏广告位
     */
    public string $superior_popularity_type;
    
    /**
     * @var array<int> $flow_package 定向逻辑，可通过【工具-穿山甲流量包-获取穿山甲流量包】定向逻辑和排除定向逻辑只能选其一
     */
    public array $flow_package;
    
    /**
     * @var array<int> $exclude_flow_package 排除定向逻辑，可通过【工具-穿山甲流量包-获取穿山甲流量包】定向逻辑和排除定向逻辑只能选其一
     */
    public array $exclude_flow_package;
    
    /**
     * @var string $hide_if_converted 过滤已转化用户。详见【附录-过滤已转化用户类型】默认值：AD广告计划注意点：过滤已转化不支持投放目标为展示、点击计划，不支持受众预估过滤已转化用户：选择过滤已转化用户之后，可以避免该广告再次投放给已转化过的用户，可以选择过滤5个广告层级的已转化用户（不限/广告计划/广告组/广告账户/公司账户/APP）对于IOS14.5专属广告，只支持NO_EXCLUDE默认值：AD广告计划
     */
    public string $hide_if_converted;
    
    /**
     * @var string $converted_time_duration 过滤时间范围，详见【附录-过滤时间范围】当 hide_if_converted =APP或CUSTOMER或ORGANIZATION时必填，默认为THREE_MONTH
     */
    public string $converted_time_duration;
    
    /**
     * @var array<string> $device_type 设备类型。允许值是："MOBILE","PAD"。缺省表示不限设备类型。穿山甲已经全量，投放范围为默认时需要有白名单权限才可以
     */
    public array $device_type;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\AudiencePackageUpdatePostParamGeolocationData> $geolocation 地图位置，district为BUSINESS_DISTRICT才有效
     */
    public array $geolocation;
    
    /**
     * @var array<int> $aweme_fans_numbers （抖音推广特有）账号粉丝相似人群（添加抖音账号，会将广告投放给对应账号的相似人群粉丝）
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
     * @var int $filter_own_aweme_fans 过滤自己的粉丝，允许值：0表示不过滤，1表示过滤
     */
    public int $filter_own_aweme_fans;
    
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
    
    /**
     * @var string $aweme_fan_time_scope 抖音达人互动行为时间范围，允许值：FIFTEEN_DAYS15天、THIRTY_DAYS30天、SIXTY_DAYS60天，默认时间范围为15天
     */
    public string $aweme_fan_time_scope;
    
    /**
     * @var int $hide_if_exists 已安装用户，0表示不限，1表示过滤，2表示定向；过滤表示投放时不给安装客户展示广告，支持应用推广；定向表示投放时给安装客户展示广告；投放时优先获取直达链接，无直达链接时使用应用包名进行投放；如果无直达链接或应用包名，定向安装选项实际不生效；定向仅对Android链接生效。默认值:0允许值:0,1,2
     */
    public int $hide_if_exists;
    
}