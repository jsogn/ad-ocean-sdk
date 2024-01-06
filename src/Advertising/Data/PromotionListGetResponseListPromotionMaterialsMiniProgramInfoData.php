<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序信息
class PromotionListGetResponseListPromotionMaterialsMiniProgramInfoData extends Data
{

    /**
     * @var string $app_id 小程序/小游戏id
     */
    public string $app_id;
    
    /**
     * @var string $start_path 启动路径
     */
    public string $start_path;
    
    /**
     * @var string $params 页面监测参数
     */
    public string $params;
    
    /**
     * @var string $url 字节小程序调起链接
     */
    public string $url;
    
}