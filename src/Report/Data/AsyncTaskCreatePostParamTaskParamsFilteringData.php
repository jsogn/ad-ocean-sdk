<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤字段
class AsyncTaskCreatePostParamTaskParamsFilteringData extends Data
{

    /**
     * @var array<int> $campaign_id 按照campaign_id过滤
     */
    public array $campaign_id;
    
    /**
     * @var array<int> $ad_id 按照ad_id过滤
     */
    public array $ad_id;
    
    /**
     * @var array<int> $creative_id 按照creative_id过滤
     */
    public array $creative_id;
    
    /**
     * @var array<string> $landing_type 按照广告组推广目的过滤
     */
    public array $landing_type;
    
    /**
     * @var array<string> $pricing 按照出价方式过滤，详见【附录-计划出价类型】
     */
    public array $pricing;
    
    /**
     * @var array<string> $inventory_type 按照广告首选位置过滤，详见【附录-首选投放位置】
     */
    public array $inventory_type;
    
    /**
     * @var array<string> $creative_material_mode 按照创意类型过滤，STATIC_ASSEMBLE表示程序化创意，INTERVENE表示自定义创意。
     */
    public array $creative_material_mode;
    
    /**
     * @var array<string> $convert_type 按照转化类型过滤，只支持 dpa 报表。详见【附录-转化类型】
     */
    public array $convert_type;
    
    /**
     * @var array<string> $platform 按照平台类型过滤，只支持 dpa 报表。详见【附录-受众平台类型】
     */
    public array $platform;
    
    /**
     * @var array<string> $bidword 按照搜索词过滤，只支持关键词/搜索词报表，关键词可通过【搜索广告-获取关键词】接口进行获取
     */
    public array $bidword;
    
    /**
     * @var array<string> $query 按照搜索词过滤。搜索词表示用户是通过【搜索词】进行检索到相关广告，可用于分析怎样的搜索词比较常用
     */
    public array $query;
    
    /**
     * @var array<string> $image_mode 按照素材类型过滤，详见【附录-素材类型】
     */
    public array $image_mode;
    
}