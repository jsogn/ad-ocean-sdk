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
    public array $list;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorDetailGetResponseErrorListData> $error_list 查询失败的锚点及查询失败原因
     */
    public array $error_list;
    
}