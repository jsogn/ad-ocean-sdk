<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量更新项目素材启用状态，list长度限制1～100
class OcProjectMaterialStatusUpdatePostParamData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;

    /**
     * @var string $opt_status 可选值: DISABLE 暂停, ENABLE 启用
     */
    public string $opt_status;

}
