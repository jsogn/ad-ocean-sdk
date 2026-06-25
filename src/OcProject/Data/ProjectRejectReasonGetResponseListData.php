<?php

declare(strict_types=1);

namespace AdOceanSdk\OcProject\Data;

use AdOceanSdk\Kernel\Data\Data;

// 审核建议列表
class ProjectRejectReasonGetResponseListData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;

    /**
     * @var array<\AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseListProjectRejectData> $project_reject 项目维度审核建议列表
     */
    public array $project_reject;

    /**
     * @var array<\AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseListMaterialRejectData> $material_reject 素材维度审核建议列表
     */
    public array $material_reject;

}