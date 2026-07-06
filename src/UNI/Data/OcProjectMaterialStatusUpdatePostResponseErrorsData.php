<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 更新失败的素材列表
class OcProjectMaterialStatusUpdatePostResponseErrorsData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;

    /**
     * @var string $message 失败原因
     */
    public string $message;

}
