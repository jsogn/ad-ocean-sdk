<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材及素材属性列表
class ToolsEbpVideoAttributesListGetResponseMaterialsData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;

    /**
     * @var array<string> $ad_low_quality_suggestions 当该素材为AD低质素材时，返回低质原因
     */
    public array $ad_low_quality_suggestions;

    /**
     * @var array<string> $ecp_low_quality_suggestions 当该素材为千川低质素材时，返回低质原因
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

}