<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class MajordomoAdvertiserSelectGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Majordomo\Data\MajordomoAdvertiserSelectGetResponseListData> $list 广告主列表，目前每个object中只有advertiser_id字段，后续会丰富字段
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Majordomo\Data\MajordomoAdvertiserSelectGetResponseListData::class)]
    public array $list;
    
}