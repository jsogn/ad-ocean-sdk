<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class PromotionAutoGenerateConfigGetResponseData extends Data
{

    /**
     * @var int $config_id 配置ID
     */
    public int $config_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseTemplatesData> $templates 模板列表(仅当version=Template时有值)
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseTemplatesData::class)]
    public array $templates;
    
    /**
     * @var int $update_time 上次修改时间戳
     */
    public int $update_time;
    
    /**
     * @var string $version 版本：Template版本(老版本)，Strategy版本（新版本） 可选值:
     */
    public string $version;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataData> $strategy_data 策略配置详情列表(仅当version=Strategy时有值)
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionAutoGenerateConfigGetResponseStrategyDataData::class)]
    public array $strategy_data;
    
}