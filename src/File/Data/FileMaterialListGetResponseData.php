<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileMaterialListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileMaterialListGetResponseMaterialsData> $materials 低效素材id列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileMaterialListGetResponseMaterialsData::class)]
    public array $materials;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}