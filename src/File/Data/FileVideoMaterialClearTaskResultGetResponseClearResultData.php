<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 清理结果
class FileVideoMaterialClearTaskResultGetResponseClearResultData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var array<string> $clear_material_types 清理素材类型：
     */
    public array $clear_material_types;
    
    /**
     * @var int $creative_success_count 清理成功的创意数
     */
    public int $creative_success_count;
    
    /**
     * @var int $creative_fail_count 清理失败的创意数
     */
    public int $creative_fail_count;
    
    /**
     * @var int $promotion_success_count 清理成功的广告数
     */
    public int $promotion_success_count;
    
    /**
     * @var int $promotion_fail_count 清理失败的广告数
     */
    public int $promotion_fail_count;
    
    /**
     * @var string $clear_result 清理结果：
     */
    public string $clear_result;
    
}