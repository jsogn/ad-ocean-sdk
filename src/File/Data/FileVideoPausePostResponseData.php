<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoPausePostResponseData extends Data
{

    /**
     * @var \AdOceanSdk\File\Data\FileVideoPausePostResponseMaterialClearResultData $material_clear_result 删除结果明细
     */
    public \AdOceanSdk\File\Data\FileVideoPausePostResponseMaterialClearResultData $material_clear_result;
    
    /**
     * @var string $status 删除结果，允许值：
     */
    public string $status;
    
    /**
     * @var array<int> $fail_material_ids 删除失败的素材id明细(素材id下仍然有至少一个的可投创意)
     */
    public array $fail_material_ids;
    
}