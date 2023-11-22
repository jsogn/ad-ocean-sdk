<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 删除结果明细
class FileVideoPausePostResponseMaterialClearResultData extends Data
{

    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var bool $is_cleared 素材是否被删除（存在内部错误导致素材没有被删除）
     */
    public bool $is_cleared;
    
    /**
     * @var array<int> $creative_success_list 删除成功的使用该素材的创意ID
     */
    public array $creative_success_list;
    
    /**
     * @var array<int> $creative_failure_list 删除失败的使用该素材的创意ID
     */
    public array $creative_failure_list;
    
    /**
     * @var array<int> $promotion_success_list 删除成功的使用该素材的广告ID
     */
    public array $promotion_success_list;
    
    /**
     * @var array<int> $promotion_failure_list 删除失败的使用该素材的广告ID
     */
    public array $promotion_failure_list;
    
}