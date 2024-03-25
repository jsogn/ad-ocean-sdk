<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class DPADetailGetGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var array<\AdOceanSdk\DPA\Data\DPADetailGetGetResponseListData> $list 商品库商品列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\DPA\Data\DPADetailGetGetResponseListData::class)]
    public array $list;
    
}