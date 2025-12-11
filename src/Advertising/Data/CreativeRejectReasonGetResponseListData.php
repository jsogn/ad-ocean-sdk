<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 审核建议数据
class CreativeRejectReasonGetResponseListData extends Data
{

    /**
     * @var int $creative_id 创意ID
     */
    public int $creative_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseListRejectDataData> $reject_data 审核建议
     */
    public array $reject_data;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeRejectReasonGetResponseListMaterialRejectData> $material_reject 自定义创意类型的素材审核建议
     */
    public array $material_reject;
    
}