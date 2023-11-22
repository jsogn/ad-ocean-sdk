<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序信息，当landing_type = MICRO_GAME且micro_promotion_type = BYTE_APP或BYTE_GAME时有效且必填
class PromotionCreatePostParamPromotionMaterialsMiniProgramInfoData extends Data
{

    /**
     * @var string $url 字节小程序调起链接，传输会检查url正确性;
     */
    public string $url;
    
    /**
     * @var string $app_id 小程序/小游戏id，当使用 mini_program_info且url不传入时必填
     */
    public string $app_id;
    
    /**
     * @var string $start_path 启动路径，小程序类型必传，小游戏类型不传值
     */
    public string $start_path;
    
    /**
     * @var string $params 页面监测参数
     */
    public string $params;
    
}