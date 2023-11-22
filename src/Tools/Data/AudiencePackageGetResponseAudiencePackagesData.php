<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 定向包信息
class AudiencePackageGetResponseAudiencePackagesData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $audience_package_id 定向包id
     */
    public int $audience_package_id;
    
    /**
     * @var string $name 定向包名称
     */
    public string $name;
    
    /**
     * @var string $description 定向包描述
     */
    public string $description;
    
    /**
     * @var string $landing_type 定向包推广类型【附录：定向包推广类型】
     */
    public string $landing_type;
    
    /**
     * @var string $ad_type 广告类型
     */
    public string $ad_type;
    
    /**
     * @var string $marketing_goal 营销场景：VIDEO_AND_IMAGE 短视频/图片， LIVE 直播
     */
    public string $marketing_goal;
    
    /**
     * @var string $hide_if_converted 过滤已转化用户。详见【附录-过滤已转化用户类型】注意点：过滤已转化不支持投放目标为展示、点击计划，不支持受众预估过滤已转化用户：选择过滤已转化用户之后，可以避免该广告再次投放给已转化过的用户，可以选择过滤5个广告层级的已转化用户（不限/广告计划/广告组/广告账户/公司账户/APP）
     */
    public string $hide_if_converted;
    
    /**
     * @var string $converted_time_duration 过滤时间范围，详见，【附录-过滤时间范围】，当过滤已转化用户类型选择"公司账户"时填写，教育行业专属，非教育行业不会生效
     */
    public string $converted_time_duration;
    
    /**
     * @var string $delivery_range 广告投放范围【附录：广告投放范围】
     */
    public string $delivery_range;
    
    /**
     * @var int $hide_if_exists 已安装用户，0表示不限，1表示过滤，2表示定向；过滤表示投放时不给安装客户展示广告，支持应用推广；定向表示投放时给安装客户展示广告；投放时优先获取直达链接，无直达链接时使用应用包名进行投放；如果无直达链接或应用包名，定向安装选项实际不生效；定向仅对Android链接生效。
     */
    public int $hide_if_exists;
    
    /**
     * @var \AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesAudienceData $audience 自定内容
     */
    public \AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesAudienceData $audience;
    
}