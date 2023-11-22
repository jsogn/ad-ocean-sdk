<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserFundTransactionGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserFundTransactionGetResponseListData> $list data中元素，其中每个元素字段如下
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserFundTransactionGetResponseListData::class)]
    public array $list;
    
}