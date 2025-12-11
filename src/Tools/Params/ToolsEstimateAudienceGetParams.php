<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEstimateAudienceGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var int $audience_package_id 定向包ID，定向包ID由【工具-定向包管理-获取定向包】获取如果同时传定向包ID和自定义用户定向参数时，仅定向包中的定向生效
     */
    public int $audience_package_id;
    
    /**
     * @var string $district 地域类型允许值:CITY省市、COUNTY区县、BUSINESS_DISTRICT商圈、REGION行政区域、OVERSEA海外区域、NONE不限使用省市示例：{"district": "CITY","city": [12]}使用区县示例：{"district": "COUNTY","city": [130102]}使用行政区域示例：{"district":"REGION": "city":[31], "region_versio":"1.0.0"}使用海外区域示例：{"district":"OVERSEA": "city":[3041566], "region_versio":"1.0.0"}
     */
    public string $district;
    
    /**
     * @var string $region_version 行政区域版本号。通过【获取行政信息】接口获取district =REGION/OVERSEA时必填
     */
    public string $region_version;
    
    /**
     * @var array<int> $city 地域定向省市或者区县列表(当传递省份ID时,旗下市县ID可省略不传)，当district=CITY/COUNTY/REGION/OVERSEA时必填district =CITY/COUNTY时，详见【附件-city.json】district =REGION/OVERSEA时，通过【获取行政信息】接口获取
     */
    public array $city;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetParamGeolocationData> $geolocation 从地图添加(地图位置)，district为"BUSINESS_DISTRICT"时填写
     */
    public array $geolocation;
    
    /**
     * @var string $location_type 位置类型允许值：CURRENT正在该地区的用户，HOME居住在该地区的用户，TRAVEL到该地区旅行的用户，ALL该地区内的所有用户当city和district有值时必填
     */
    public string $location_type;
    
    /**
     * @var string $gender 性别, 详见【附录-受众性别】允许值:GENDER_FEMALE,GENDER_MALE,NONE
     */
    public string $gender;
    
    /**
     * @var array<string> $age 年龄, 详见【附录-受众年龄区间】允许值:AGE_BETWEEN_18_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_40,AGE_BETWEEN_41_49,AGE_ABOVE_50
     */
    public array $age;
    
    /**
     * @var array<int> $retargeting_tags_include 定向人群包列表（自定义人群），内容为人群包id。如果选择"同时定向与排除"，需传入retargeting_tags_include和retargeting_tags_excludeIOS14.5 专属广告计划在广告位为穿山甲时不支持
     */
    public array $retargeting_tags_include;
    
    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表（自定义人群），内容为人群包id。如果选择"同时定向与排除"，需传入retargeting_tags_include和retargeting_tags_excludeIOS14.5 专属广告计划在广告位为穿山甲时不支持
     */
    public array $retargeting_tags_exclude;
    
    /**
     * @var string $interest_action_mode 行为兴趣允许值：UNLIMITED不限,CUSTOM自定义,RECOMMEND系统推荐。若与自定义人群同时使用，系统推荐(RECOMMEND)不生效IOS14.5 专属广告计划在广告位为穿山甲时只支持UNLIMITED
     */
    public string $interest_action_mode;
    
    /**
     * @var int $action_days 用户发生行为天数，当interest_action_mode传CUSTOM时有效允许值：7,15,30,60,90,180,365IOS14.5 专属广告计划在广告位为穿山甲时不支持用户发生行为天数
     */
    public int $action_days;
    
    /**
     * @var array<int> $action_categories 行为类目词，当interest_action_mode传CUSTOM时有效行为类目可以通过【工具-行为兴趣词管理-行为类目查询】获取IOS14.5 专属广告计划在广告位为穿山甲时不支持行为类目词
     */
    public array $action_categories;
    
    /**
     * @var array<int> $action_words 行为关键词，当interest_action_mode传CUSTOM时有效行为类目可以通过【工具-行为兴趣词管理-行为关键词查询】获取IOS14.5 专属广告计划在广告位为穿山甲时不支持行为关键词
     */
    public array $action_words;
    
    /**
     * @var array<int> $interest_categories 兴趣类目词，当interest_action_mode传CUSTOM时有效IOS14.5 专属广告计划在广告位为穿山甲时不支持兴趣类目词
     */
    public array $interest_categories;
    
    /**
     * @var array<int> $interest_words 兴趣关键词, 传入具体的词id，非兴趣词包id，可以通过词包相关接口或者兴趣关键词word2id接口获取词id，一个计划下最多创建1000个关键词。当interest_action_mode传CUSTOM时有效IOS14.5 专属广告计划在广告位为穿山甲时不支持兴趣关键词
     */
    public array $interest_words;
    
    /**
     * @var array<string> $aweme_fan_behaviors 抖音达人互动用户行为类型, 详见【附录-抖音用户行为类型】允许值:FOLLOWED_USER,COMMENTED_USER,LIKED_USER,SHARED_USER（抖音达人定向）
     */
    public array $aweme_fan_behaviors;
    
    /**
     * @var string $aweme_fan_time_scope 抖音达人互动行为时间范围，允许值：FIFTEEN_DAYS15天、THIRTY_DAYS30天、SIXTY_DAYS60天 ，默认时间范围为15天
     */
    public string $aweme_fan_time_scope;
    
    /**
     * @var array<int> $aweme_fan_categories 抖音达人分类ID列表，与aweme_fan_behaviors同时设置才会生效（抖音达人定向），可通过【工具-抖音达人-查询抖音类目列表】接口获取
     */
    public array $aweme_fan_categories;
    
    /**
     * @var array<int> $aweme_fan_accounts 抖音达人ID列表，与aweme_fan_behaviors同时设置才会生效（抖音达人定向），可通过【工具-抖音达人-查询抖音类目下的推荐达人】接口获取。
     */
    public array $aweme_fan_accounts;
    
    /**
     * @var int $filter_aweme_abnormal_active （抖音号、直播间推广特有）过滤高活跃用户允许值：0表示不过滤，1表示过滤
     */
    public int $filter_aweme_abnormal_active;
    
    /**
     * @var int $filter_aweme_fans_count （抖音号、直播间推广特有）过滤高关注数用户，例如"filter_aweme_fans_count": 1000表示过滤粉丝数在1000以上的用户
     */
    public int $filter_aweme_fans_count;
    
    /**
     * @var int $filter_own_aweme_fans （抖音号、直播间推广特有）过滤自己的粉丝允许值：0表示不过滤，1表示过滤
     */
    public int $filter_own_aweme_fans;
    
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
     * @var array<string> $platform 平台，当下载方式包含下载链接时，平台类型需与选择的下载链接类型对应，当下载方式不包含下载链接的时候，平台可多选。为保证投放效果,平台类型定向PC与移动端互斥。详见【附录-受众平台类型】允许值:ANDROID,IOS
     */
    public array $platform;
    
    /**
     * @var string $android_osv 最低安卓版本，当app_type为APP_ANDROID选填,其余情况不填, 详见【附录-受众android版本】允许值:0.0,2.0,2.1,2.2,2.3,3.0,3.1,3.2,4.0,4.1,4.2,4.3,4.4,4.5,5.0,NONE……
     */
    public string $android_osv;
    
    /**
     * @var string $ios_osv 最低IOS版本，当app_type为APP_IOS选填,其余情况不填, 详见【附录-受众ios版本】允许值:0.0,4.0,4.1,4.2,4.3,5.0,5.1,6.0,7.0,7.1,8.0,8.1,8.2,9.0,NONE……
     */
    public string $ios_osv;
    
    /**
     * @var array $device_type 设备类型。允许值是：MOBILE,PAD。缺省表示不限设备类型。穿山甲已经全量，投放范围为默认时需要有白名单权限才可以
     */
    public array $device_type;
    
    /**
     * @var array<string> $ac 网络类型, 详见【附录-受众网络类型】允许值:WIFI,2G,3G,4G,5G
     */
    public array $ac;
    
    /**
     * @var array<string> $carrier 运营商, 详见【附录-受众运营商类型】允许值:MOBILE,UNICOM,TELCOM
     */
    public array $carrier;
    
    /**
     * @var array<string> $activate_type 新用户(新用户使用头条的时间，只有选择快应用+穿山甲时，才可选择转化的时间范围)，详见【附录-用户首次激活时间】，允许值:WITH_IN_A_MONTH一个月以内,ONE_MONTH_2_THREE_MONTH一个月到三个月,THREE_MONTH_EAILIER三个月或更早
     */
    public array $activate_type;
    
    /**
     * @var array<string> $article_category 文章分类, 详见【附录-受众文章分类】文章分类：只针对投放在详情页位置的广告生效, 不支持人群预估
     */
    public array $article_category;
    
    /**
     * @var array<string> $device_brand 手机品牌, 详见【附录-手机品牌】当下载链接为Android应用时，不能选择APPLE品牌，当下载链接为IOS应用时，不能选择非APPLE品牌，否则会报错
     */
    public array $device_brand;
    
    /**
     * @var array<int> $launch_price 手机价格,传入价格区间，最高传入11000（表示1w以上）传值示例 "launch_price": [2000, 11000]，表示2000元以上;注意：手机价格须为500的整数，launch_price数组长度固定为2
     */
    public array $launch_price;
    
    /**
     * @var int $auto_extend_enabled 是否启用智能放量。允许值是：0、1。缺省为0。注意：智能放量不支持受众预估
     */
    public int $auto_extend_enabled;
    
    /**
     * @var array $auto_extend_targets 可放开定向。当auto_extend_enabled=1 时选填，缺省为全不选。允许值：AGE年龄REGION地域GENDER性别INTEREST_ACTION行为兴趣CUSTOM_AUDIENCE自定人群-定向
     */
    public array $auto_extend_targets;
    
}