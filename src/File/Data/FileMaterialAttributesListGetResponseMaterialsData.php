<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材及素材属性列表
class FileMaterialAttributesListGetResponseMaterialsData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var array<string> $ad_low_quality_suggestions 当该素材为AD低质素材时，返回低质原因，仅当return_lowquality_suggestions = true时，会返回此参数
     */
    public array $ad_low_quality_suggestions;
    
    /**
     * @var array<string> $ecp_low_quality_suggestions 当该素材为千川低质素材时，返回低质原因，仅当return_lowquality_suggestions = true时，会返回此参数
     */
    public array $ecp_low_quality_suggestions;
    
    /**
     * @var bool $is_ad_high_quality_material 是否AD优质素材
     */
    public bool $is_ad_high_quality_material;
    
    /**
     * @var bool $is_ad_low_quality_material 是否AD低质素材
     */
    public bool $is_ad_low_quality_material;
    
    /**
     * @var bool $is_ecp_high_quality_material 是否千川优质素材
     */
    public bool $is_ecp_high_quality_material;
    
    /**
     * @var bool $is_ecp_low_quality_material 是否千川低质素材
     */
    public bool $is_ecp_low_quality_material;
    
    /**
     * @var bool $is_first_publish_material 是否是首发素材
     */
    public bool $is_first_publish_material;
    
    /**
     * @var bool $is_inefficient_material 是否低效素材
     */
    public bool $is_inefficient_material;
    
    /**
     * @var bool $is_carry_material 是否存在搬运风险，建议入参account_type = AD 或 QIANCHUAN查询
     */
    public bool $is_carry_material;
    
    /**
     * @var bool $is_similar_material 是否同质化挤压严重素材
     */
    public bool $is_similar_material;
    
    /**
     * @var bool $is_similar_queue_material 是否同质化素材风险-排队投放素材
     */
    public bool $is_similar_queue_material;
    
    /**
     * @var bool $is_similar_expected_queue_material 是否同质化素材风险-未投放预计排队素材
     */
    public bool $is_similar_expected_queue_material;
    
    /**
     * @var string $attributes_modify_time 「存在搬运打压风险」属性最后一次更新时间，如素材未被标记为搬运，则不会返回该时间。格式为yyyy-mm-dd HH:MM:SS
     */
    public string $attributes_modify_time;
    
}