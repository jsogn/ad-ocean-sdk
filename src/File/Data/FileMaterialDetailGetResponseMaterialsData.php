<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材列表
class FileMaterialDetailGetResponseMaterialsData extends Data
{

    /**
     * @var string $material_id 素材 id
     */
    public string $material_id;
    
    /**
     * @var bool $is_inefficient_material 是否低效素材
     */
    public bool $is_inefficient_material;
    
    /**
     * @var bool $is_similar_queue_material 是否同质化素材风险-排队投放素材
     */
    public bool $is_similar_queue_material;
    
    /**
     * @var bool $is_similar_expected_queue_material 是否同质化素材风险-未投放预计排队素材
     */
    public bool $is_similar_expected_queue_material;
    
    /**
     * @var bool $is_similar_material 是否同质化挤压严重素材
     */
    public bool $is_similar_material;
    
    /**
     * @var bool $is_ecp_high_quality 是否千川优质素材
     */
    public bool $is_ecp_high_quality;
    
    /**
     * @var bool $is_ad_high_quality 是否AD优质素材
     */
    public bool $is_ad_high_quality;
    
    /**
     * @var bool $is_first_publish_material 是否是首发素材
     */
    public bool $is_first_publish_material;
    
    /**
     * @var bool $is_ad_low_quality_material 是否AD低质素材
     */
    public bool $is_ad_low_quality_material;
    
    /**
     * @var bool $is_ecp_low_quality_material 是否千川低质素材
     */
    public bool $is_ecp_low_quality_material;
    
    /**
     * @var array<string> $message_ad_low_quality_material 当该素材为AD低质素材时，返回低质原因
     */
    public array $message_ad_low_quality_material;
    
    /**
     * @var array<string> $message_ecp_low_quality_material 当该素材为千川低质素材时，返回低质原因
     */
    public array $message_ecp_low_quality_material;
    
}