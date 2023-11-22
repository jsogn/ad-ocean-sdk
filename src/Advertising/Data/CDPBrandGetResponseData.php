<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CDPBrandGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandCategoryInfoData> $brand_category_info 品牌所属类别
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandCategoryInfoData::class)]
    public array $brand_category_info;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandInfoDataData> $brand_info_data 品牌信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CDPBrandGetResponseBrandInfoDataData::class)]
    public array $brand_info_data;
    
}