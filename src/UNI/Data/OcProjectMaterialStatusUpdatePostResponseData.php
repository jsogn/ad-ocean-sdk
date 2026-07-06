<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class OcProjectMaterialStatusUpdatePostResponseData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var array<int> $material_ids 更新成功的视频素材ID集合
     */
    public array $material_ids;

    /**
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialStatusUpdatePostResponseErrorsData> $errors 更新失败的素材列表
     */
    public array $errors;

}
