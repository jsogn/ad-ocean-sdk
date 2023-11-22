<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileRebateMaterialSearchGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileRebateMaterialSearchGetResponseMaterialsData> $materials 素材列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileRebateMaterialSearchGetResponseMaterialsData::class)]
    public array $materials;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}