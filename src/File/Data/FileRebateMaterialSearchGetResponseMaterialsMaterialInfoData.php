<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材信息
class FileRebateMaterialSearchGetResponseMaterialsMaterialInfoData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var int $material_is_effective 当月最新一天素材是否在投
     */
    public int $material_is_effective;
    
    /**
     * @var int $is_valid_video_material 【政策粒度】是否有效素材
     */
    public int $is_valid_video_material;
    
    /**
     * @var float $policy_cost 【政策粒度】消耗
     */
    public float $policy_cost;
    
    /**
     * @var float $cost 消耗
     */
    public float $cost;
    
    /**
     * @var string $material_create_time 素材创建日期
     */
    public string $material_create_time;
    
    /**
     * @var array<string> $material_tags 素材标签
     */
    public array $material_tags;
    
    /**
     * @var array<int> $ad_ids 计划id数组
     */
    public array $ad_ids;
    
    /**
     * @var array<int> $promotion_ids 升级版广告id
     */
    public array $promotion_ids;
    
    /**
     * @var array<int> $auto_ad_ids 自动计划id数组
     */
    public array $auto_ad_ids;
    
    /**
     * @var array<int> $auto_promotion_ids 自动升级版广告id
     */
    public array $auto_promotion_ids;
    
}