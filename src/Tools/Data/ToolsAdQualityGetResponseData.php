<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsAdQualityGetResponseData extends Data
{

    /**
     * @var int $app_id app的id，可在应用下载广告中使用
     */
    public int $app_id;
    
    /**
     * @var float $quality_score 计划综合质量得分
     */
    public float $quality_score;
    
    /**
     * @var float $ctr_score 创意质量得分
     */
    public float $ctr_score;
    
    /**
     * @var float $web_score 落地页响应得分
     */
    public float $web_score;
    
    /**
     * @var float $cvr_score 落地页素材得分
     */
    public float $cvr_score;
    
}