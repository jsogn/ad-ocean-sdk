<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileMaterialAttributesListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileMaterialAttributesListGetResponseMaterialsData> $materials 素材及素材属性列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileMaterialAttributesListGetResponseMaterialsData::class)]
    public array $materials;
    
    /**
     * @var \AdOceanSdk\File\Data\FileMaterialAttributesListGetResponsePageData $page 分页信息
     */
    public \AdOceanSdk\File\Data\FileMaterialAttributesListGetResponsePageData $page;
    
}