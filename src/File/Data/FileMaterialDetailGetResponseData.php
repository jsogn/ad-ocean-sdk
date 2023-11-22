<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileMaterialDetailGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileMaterialDetailGetResponseMaterialsData> $materials 素材列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileMaterialDetailGetResponseMaterialsData::class)]
    public array $materials;
    
}