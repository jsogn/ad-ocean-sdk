<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPAMetaGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAMetaGetGetResponseListData> $list json返回值
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\DPA\Data\DPAMetaGetGetResponseListData::class)]
    public array $list;
    
}