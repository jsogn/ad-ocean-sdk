<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 定向设置
class ProjectUpdatePostParamAudienceData extends Data
{

    /**
     * @var int $audience_package_id 定向包ID，定向包ID由【工具-定向包管理-获取定向包】获取如果同时传定向包ID和自定义用户定向参数时，仅定向包中的定向生效
     */
    public int $audience_package_id;
    
    /**
     * @var string $district 地域类型允许值: BUSINESS_DISTRICT商圈、REGION行政区域、NONE不限
     */
    public string $district;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamAudienceGeolocationData> $geolocation 从地图添加(地图位置)，district为"BUSINESS_DISTRICT"时填写，最多允许添加1000个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamAudienceGeolocationData::class)]
    public array $geolocation;
    
    /**
     * @var string $region_recommend 地域智能放量定向，ON为开启、OFF为关闭
     */
    public string $region_recommend;
    
    /**
     * @var array<string> $age 年龄， 详见【附录-受众年龄区间】允许值：AGE_BETWEEN_18_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_40,AGE_BETWEEN_41_49,AGE_ABOVE_50或：
     */
    public array $age;
    
    /**
     * @var array<int> $retargeting_tags_include 定向人群包列表（自定义人群），内容为人群包id。如果选择"同时定向与排除"，需传入retargeting_tags_include和retargeting_tags_exclude；
     */
    public array $retargeting_tags_include;
    
    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表（自定义人群），内容为人群包id。如果选择"同时定向与排除"，需传入retargeting_tags_include和retargeting_tags_exclude
     */
    public array $retargeting_tags_exclude;
    
    /**
     * @var string $hide_if_converted 过滤已转化用户，可以避免该广告再次投放给已转化过的用户允许值：NO_EXCLUDE不限制、PROJECT项目、ADVERTISER广告账户、CUSTOMER客户、ORGANIZATION组织（仅加白广告主可用）
     */
    public string $hide_if_converted;
    
}