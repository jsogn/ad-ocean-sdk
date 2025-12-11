<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class MaterialStatusUpdatePostResponseData extends Data
{

    /**
     * @var int $promotion_id 广告ID
     */
    public int $promotion_id;
    
    /**
     * @var array<int> $material_ids 更新成功的素材集合
     */
    public array $material_ids;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\MaterialStatusUpdatePostResponseErrorsData> $errors 更新失败的素材列表
     */
    public array $errors;
    
}