<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class NativeAnchorDetailGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListData> $list 锚点详情列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseListData::class)]
    public array $list;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseErrorListData> $error_list 查询失败的锚点及查询失败原因
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseErrorListData::class)]
    public array $error_list;
    
}