<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class DPAVideoGetGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var array<\AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListData> $list 商品视频模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListData::class)]
    public array $list;
    
}