<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsBidSuggestGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $pricing 出价类型，查看【附录-出价类型】
     */
    public string $pricing;
    
    /**
     * @var int $campaign_id 广告组ID
     */
    public int $campaign_id;
    
    /**
     * @var int $ad_id 广告ID，修改广告时需要传
     */
    public int $ad_id;
    
    /**
     * @var string $bid_mode 出价方式，手动&自动允许值："SUGGEST"、"AUTO_BID"- 手动获取到的是建议出价- 自动获取到的是建议日预算和预期成本
     */
    public string $bid_mode;
    
    /**
     * @var string $budget_mode 广告预算类型(创建后不可修改), 详见【附录-预算类型】允许值:"BUDGET_MODE_DAY","BUDGET_MODE_TOTAL"
     */
    public string $budget_mode;
    
    /**
     * @var int $budget 广告预算(出价方式为CPC、CPM、CPV时，不少于100元；出价方式为OCPM、OCPC时，不少于300元。单次预算修改幅度不小于100元,日修改预算不超过20次)取值范围:"≥ 0"
     */
    public int $budget;
    
    /**
     * @var string $schedule_type 广告投放时间类型, 详见【附录-广告投放时间类型】允许值:"SCHEDULE_FROM_NOW","SCHEDULE_START_END"
     */
    public string $schedule_type;
    
    /**
     * @var string $flow_control_mode 广告投放速度类型, 详见【附录-广告投放速度类型】允许值:"FLOW_CONTROL_MODE_FAST","FLOW_CONTROL_MODE_SMOOTH"
     */
    public string $flow_control_mode;
    
    /**
     * @var int $convert_id 转化id，可通过【工具模块-OCPC广告创建转化查询】查询可用id
     */
    public int $convert_id;
    
    /**
     * @var string $retargeting_type 定向人群包类型,详见【附录-定向人群包类型】,即将下线允许值:"RETARGETING_INCLUDE","RETARGETING_EXCLUDE","RETARGETING_NONE"
     */
    public string $retargeting_type;
    
    /**
     * @var array<int> $retargeting_tags 当选择使用人群包定向时填写，内容为人群包id，即将下线
     */
    public array $retargeting_tags;
    
    /**
     * @var array<int> $retargeting_tags_include 定向人群包列表，内容为人群包id，内容为人群包id
     */
    public array $retargeting_tags_include;
    
    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表，内容为人群包id，内容为人群包id
     */
    public array $retargeting_tags_exclude;
    
    /**
     * @var string $gender 受众性别, 详见【附录-受众性别】允许值:"GENDER_FEMALE","GENDER_MALE","GENDER_UNLIMITED"
     */
    public string $gender;
    
    /**
     * @var array<string> $age 受众年龄区间, 详见【附录-受众年龄区间】允许值:"AGE_BELOW_18","AGE_BETWEEN_18_23","AGE_BETWEEN_24_30","AGE_BETWEEN_31_40","AGE_BETWEEN_41_49","AGE_ABOVE_50"
     */
    public array $age;
    
    /**
     * @var string $android_osv 受众最低android版本(当推广应用下载Android时选填,其余情况不填), 如果填写，对应的platform参数也要传。详见【附录-受众android版本】允许值:"0.0","2.0","2.1","2.2","2.3","3.0","3.1","3.2","4.0","4.1","4.2","4.3","4.4","4.5","5.0"
     */
    public string $android_osv;
    
    /**
     * @var string $ios_osv 受众最低ios版本(当推广应用下载iOS时选填,其余情况不填), 如果填写，对应的platform参数也要传。详见【附录-受众ios版本】允许值:"0.0","4.0","4.1","4.2","4.3","5.0","5.1","6.0","7.0","7.1","8.0","8.1","8.2","9.0"
     */
    public string $ios_osv;
    
    /**
     * @var array<string> $carrier 受众运营商, 详见【附录-受众运营商类型】允许值:"MOBILE","UNICOM","TELCOM"
     */
    public array $carrier;
    
    /**
     * @var array<string> $ac 受众网络类型, 详见【附录-受众网络类型】允许值:"WIFI","2G","3G","4G"
     */
    public array $ac;
    
    /**
     * @var array<string> $device_brand 受众手机品牌, 详见【附录-手机品牌】允许值:"APPLE","HUAWEI","XIAOMI","SAMSUNG","OPPO","VIVO","MEIZU","GIONEE","COOLPAD","LENOVO","LETV","ZTE","CHINAMOBILE","HTC","PEPPER","NUBIA","HISENSE","QIKU","TCL","SONY","SMARTISAN","360","ONEPLUS","LG","MOTO","NOKIA","GOOGLE"
     */
    public array $device_brand;
    
    /**
     * @var array<string> $article_category 受众文章分类, 详见【附录-受众文章分类】允许值:"ENTERTAINMENT","SOCIETY","CARS","INTERNATIONAL","HISTORY","SPORTS","HEALTH","MILITARY","EMOTION","FASHION","PARENTING","FINANCE","AMUSEMENT","DIGITAL","EXPLORE","TRAVEL","CONSTELLATION","STORIES","TECHNOLOGY","GOURMET","CULTURE","HOME","MOVIE","PETS","GAMES","WEIGHT_LOSING","FREAK","EDUCATION","ESTATE","SCIENCE","PHOTOGRAPHY","REGIMEN","ESSAY","COLLECTION","ANIMATION","COMICS","TIPS","DESIGN","LOCAL","LAWS","GOVERNMENT","BUSINESS","WORKPLACE","RUMOR_CRACKER","GRADUATES"
     */
    public array $article_category;
    
    /**
     * @var array<string> $activate_type 用户首次激活时间, 详见【附录-用户首次激活时间】允许值:"WITH_IN_A_MONTH","ONE_MONTH_2_THREE_MONTH","THREE_MONTH_EAILIER"
     */
    public array $activate_type;
    
    /**
     * @var array<string> $platform 受众平台(当推广目的landing_type=APP时,不填,且为保证投放效果,平台类型定向PC与移动端互斥), 详见【附录-受众平台类型】允许值:"ANDROID","IOS","PC"
     */
    public array $platform;
    
    /**
     * @var array<int> $city 地域定向城市或者区县列表(当传递省份ID时,旗下市县ID可省略不传), 详见【附件-city.json】，district传CITY或COUNTY时必填】
     */
    public array $city;
    
    /**
     * @var string $district 地域类型，详见【附录-地域类型】。允许值:"CITY","COUNTY","BUSINESS_DISTRICT"
     */
    public string $district;
    
    /**
     * @var array<int> $business_ids 商圈ID数组，district传BUSINESS_DISTRICT时必填
     */
    public array $business_ids;
    
    /**
     * @var string $location_type 受众位置类型，详见【附录-受众位置类型】
     */
    public string $location_type;
    
    /**
     * @var array<int> $ad_tag 兴趣分类, 详见【附件-ad_tag.json】
     */
    public array $ad_tag;
    
    /**
     * @var array<int> $interest_tags 兴趣关键词, 传入具体的词id，非兴趣词包id，可以通过词包相关接口或者兴趣关键词word2id接口获取词id
     */
    public array $interest_tags;
    
    /**
     * @var string $app_behavior_target APP行为定向, 详见【附录-APP行为定向类型】允许值:"CATEGORY","APP","NONE"
     */
    public string $app_behavior_target;
    
    /**
     * @var array<int> $app_category APP行为定向,分类集合, 详见【附件-app_category.json】
     */
    public array $app_category;
    
    /**
     * @var array<int> $app_ids APP行为定向,APP集合
     */
    public array $app_ids;
    
    /**
     * @var string $superior_popularity_type 精选流量包，详见【附录-精选流量包】
     */
    public string $superior_popularity_type;
    
    /**
     * @var array<int> $flow_package 定向流量包ID数组
     */
    public array $flow_package;
    
    /**
     * @var array<int> $exclude_flow_package 排除流量包ID数组
     */
    public array $exclude_flow_package;
    
    /**
     * @var array<string> $include_custom_actions 包含人群包((DPA推广目的特有,格式举例[,], day可选范围:1, 7, 14, 28, code候选范围由查询行为人群库接口得到)"days": 7, "code": 1001
     */
    public array $include_custom_actions;
    
    /**
     * @var array<string> $exclude_custom_actions 排除人群包((DPA推广目的特有,格式举例[,], day可选范围:1, 7, 14, 28, code候选范围由查询行为人群库接口得到)"days": 7, "code": 1002
     */
    public array $exclude_custom_actions;
    
}