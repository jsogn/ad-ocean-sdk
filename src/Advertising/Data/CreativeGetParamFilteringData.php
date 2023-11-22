<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件，若此字段不传，或传空则视为无限制条件
class CreativeGetParamFilteringData extends Data
{

    /**
     * @var int $campaign_id 按照campaign_id过滤
     */
    public int $campaign_id;
    
    /**
     * @var int $ad_id 按照ad_id过滤
     */
    public int $ad_id;
    
    /**
     * @var array<int> $creative_ids 按照creative_id过滤，最多传100个。创意ID需属于当前广告主，否则会报错
     */
    public array $creative_ids;
    
    /**
     * @var string $creative_title 按照creative_title过滤，支持模糊搜索。支持的最大长度为30
     */
    public string $creative_title;
    
    /**
     * @var string $landing_type 按照广告组推广目的过滤，【附录-推广目的类型】
     */
    public string $landing_type;
    
    /**
     * @var string $pricing 按照广告计划出价方式过滤，【附录-计划出价类型】
     */
    public string $pricing;
    
    /**
     * @var string $status 按照创意状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，【附录-广告创意状态】
     */
    public string $status;
    
    /**
     * @var string $image_mode 按照创意素材类型过滤，【附录-素材类型】
     */
    public string $image_mode;
    
    /**
     * @var string $creative_create_time 广告创意创建时间，格式yyyy-MM-dd，表示过滤出当天创建的广告创意
     */
    public string $creative_create_time;
    
    /**
     * @var string $creative_modify_time 广告创意更新时间，格式yyyy-MM-dd，表示过滤出当天更新的广告创意
     */
    public string $creative_modify_time;
    
}