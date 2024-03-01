<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤字段，json格式，如果campaign_ids不填默认按照广告主过滤，支持字段如下
class ReportIntergratedGetParamFilteringData extends Data
{

    /**
     * @var array<int> $campaign_id 按广告组 id 过滤；长度范围1-100
     */
    public array $campaign_id;
    
    /**
     * @var array<int> $ad_id 按广告计划 id 过滤；长度范围1-100
     */
    public array $ad_id;
    
    /**
     * @var array<int> $creative_id 按creative_id过滤；长度范围1-100
     */
    public array $creative_id;
    
    /**
     * @var array<string> $inventory_type 按照广告首选位置过滤，详见【附录-首选投放位置】
     */
    public array $inventory_type;
    
    /**
     * @var array<string> $pricing 按照出价方式过滤，详见【附录-计划出价类型】
     */
    public array $pricing;
    
    /**
     * @var array<string> $image_mode 按照类型过滤，详见【附录-素材类型】
     */
    public array $image_mode;
    
    /**
     * @var array<string> $creative_material_mode 按照创意类型过滤，STATIC_ASSEMBLE 表示程序化创意，INTERVENE表示自定义创意。至多只能选择一个。creative_material_mode这个字段只适用于创意报表即根据创意进行分组
     */
    public array $creative_material_mode;
    
    /**
     * @var array<string> $landing_type 按照广告组推广目的过滤，详见【附录-推广目的类型】
     */
    public array $landing_type;
    
    /**
     * @var array<string> $bidword 按关键词过滤, 传入关键词，不可传空字符串，最多支持100个。只支持关键词/搜索词报表，关键词可通过【搜索广告-获取关键词】接口进行获取
     */
    public array $bidword;
    
    /**
     * @var array<int> $material_id 按照素材id过滤，id值为为大于1的整数，最多支持100个，material_id可通过【素材管理】接口获取
     */
    public array $material_id;
    
    /**
     * @var array<int> $playable_id 按照试玩素材id过滤，与playable_url、playable_name取交集；长度范围1-100，id值为为大于1且不超过2^63-1的整数，playable_id可通过【工具-试玩素材管理】获取
     */
    public array $playable_id;
    
    /**
     * @var array<string> $playable_url 按照试玩素材链接过滤，与playable_id、playable_name取交集；长度范围1-100
     */
    public array $playable_url;
    
    /**
     * @var string $playable_name 按照试玩素材名字过滤，支持模糊匹配，长度不超过100;与playable_id、playable_url取交集
     */
    public string $playable_name;
    
    /**
     * @var array<string> $playable_orientation 试玩素材展示方向，重复无效，详见【附录-试玩素材方向】，允许值:"BOTH","PORTRAIT","LANDSCAPE"。其中"BOTH"指横竖屏均适配的试玩素材，而非"PORTRAIT","LANDSCAPE"的集合
     */
    public array $playable_orientation;
    
}