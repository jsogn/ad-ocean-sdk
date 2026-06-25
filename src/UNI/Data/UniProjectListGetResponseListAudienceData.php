<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 定向设置
class UniProjectListGetResponseListAudienceData extends Data
{

    /**
     * @var string $district 地域类型允许值:BUSINESS_DISTRICT商圈REGION 行政区域NONE 不限
     */
    public string $district;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectListGetResponseListAudienceGeolocationData> $geolocation 从地图添加(地图位置)
     */
    public array $geolocation;

    /**
     * @var string $region_version 行政区域版本号
     */
    public string $region_version;

    /**
     * @var array<int> $city 地域定向省市或者区县列表
     */
    public array $city;

    /**
     * @var string $location_type 位置类型，可选值: CURRENT正在该地区的用户HOME居住在该地区的用户TRAVEL到该地区旅行的用户ALL该地区内的所有用户
     */
    public string $location_type;

    /**
     * @var string $gender 性别，可选值: GENDER_FEMALE  女性GENDER_MALE 男性NONE不限
     */
    public string $gender;

    /**
     * @var array<string> $age 年龄
     */
    public array $age;

    /**
     * @var array<int> $retargeting_tags_include 定向人群包列表（自定义人群），内容为人群包id。人群包id可通过【人群包列表】获取
     */
    public array $retargeting_tags_include;

    /**
     * @var array<int> $retargeting_tags_exclude 排除人群包列表（自定义人群），内容为人群包id。人群包id可通过【人群包列表】获取
     */
    public array $retargeting_tags_exclude;

    /**
     * @var array<string> $platform 投放平台列表允许值：ANDROID、IOS
     */
    public array $platform;

    /**
     * @var string $hide_if_converted 过滤已转化用户，可选值: ADVERTISER CUSTOMER NO_EXCLUDE ORGANIZATION PROJECT
     */
    public string $hide_if_converted;

    /**
     * @var string $converted_time_duration 过滤时间范围，可选值: NONE ONE_MONTH SEVEN_DAY SIX_MONTH THREE_MONTH TODAY TWELVE_MONTH
     */
    public string $converted_time_duration;

}