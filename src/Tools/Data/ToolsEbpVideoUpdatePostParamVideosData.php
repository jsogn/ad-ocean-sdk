<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频列表，限制最多100个
class ToolsEbpVideoUpdatePostParamVideosData extends Data
{

    /**
     * @var string $file_name 视频素材名称，最多255个字
     */
    public string $file_name;

    /**
     * @var int $material_id 视频对应素材ID
     */
    public int $material_id;

}