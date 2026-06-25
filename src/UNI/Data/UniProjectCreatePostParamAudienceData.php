<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 定向设置
class UniProjectCreatePostParamAudienceData extends Data
{

    /**
     * @var string $district 地域类型，允许值: BUSINESS_DISTRICT商圈REGION 行政区域NONE 不限
     */
    public string $district;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectCreatePostParamAudienceGeolocationData> $geolocation 从地图添加(地图位置)，district为"BUSINESS_DISTRICT"时填写，最多允许添加1000个
     */
    public array $geolocation;

    /**
     * @var string $region_version 当前仅允许传入2.3.2枚举，否则接口会报错行政区域版本号，通过【获取行政信息】接口获取district =REGION时必填
     */
    public string $region_version;

    /**
     * @var array<int> $city 地域定向省市或者区县列表(当传递省份ID时,旗下市县ID可省略不传)，当district=REGION/OVERSEA时必填，通过【获取行政信息】接口获取
     */
    public array $city;

    /**
     * @var string $location_type 位置类型，允许值：CURRENT正在该地区的用户HOME居住在该地区的用户TRAVEL到该地区旅行的用户ALL该地区内的所有用户当city和district有值时，有效且必填
     */
    public string $location_type;

    /**
     * @var string $gender 性别， 详见【附录-受众性别】，允许值：GENDER_FEMALE 女 GENDER_MALE 男 NONE 不限（默认值）
     */
    public string $gender;

    /**
     * @var array<string> $age 两套枚举并存，但不支持同时传入AGE_BETWEEN_18_19,AGE_BETWEEN_20_23,AGE_BETWEEN_24_30,AGE_BETWEEN_31_35,AGE_BETWEEN_36_40,AGE_BETWEEN_41_45,AGE_BETWEEN_46_50,AGE_BETWEEN_51_55,AGE_BETWEEN_56_59,AGE_ABOVE_60年龄， 详见【附录-受众年龄区间】允许值：AGE_BETWEEN_18_23, AGE_BETWEEN_24_30,AGE_BETWEEN_31_40,AGE_BETWEEN_41_49, AGE_ABOVE_50或：
     */
    public array $age;

    /**
     * @var array<string> $platform 允许值：ANDROID、IOS
     */
    public array $platform;

    /**
     * @var string $hide_if_converted 过滤已转化用户，可以避免该单元再次投放给已转化过的用户。
允许值：NO_EXCLUDE 不限制PROJECT 项目ADVERTISER投放账户CUSTOMER 客户ORGANIZATION 组织
     */
    public string $hide_if_converted;

    /**
     * @var string $converted_time_duration 当 hide_if_converted =   CUSTOMER  公司帐户 或  ORGANIZATION  组织账户时传入有效，默认为THREE_MONTH过滤时间范围，详见 【附录-过滤时间范围】
     */
    public string $converted_time_duration;

    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表（自定义人群），内容为人群包id。人群包id可通过【人群包列表】获取
     */
    public array $retargeting_tags_exclude;

}