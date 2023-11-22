<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序资产信息
class EventManagerAssetsCreatePostParamMiniProgramAssetData extends Data
{

    /**
     * @var int $mini_program_id 字节小程序AppID，需要与资产id后面信息一致
     */
    public int $mini_program_id;
    
    /**
     * @var string $mini_program_name 字节小程序的名称，需要与资产id后面信息一致
     */
    public string $mini_program_name;
    
    /**
     * @var int $instance_id 字节小程序资产ID，通过【工具】-【获取字节小程序/小游戏】获取
     */
    public int $instance_id;
    
    /**
     * @var string $mini_program_type 字节小程序类型：
     */
    public string $mini_program_type;
    
}