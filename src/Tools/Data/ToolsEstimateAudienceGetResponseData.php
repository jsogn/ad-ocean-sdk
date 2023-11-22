<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值，其中参数如下：
class ToolsEstimateAudienceGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseToutiaoData $toutiao 今日头条预估用户覆盖量结果
     */
    public \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseToutiaoData $toutiao;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseAwemeData $aweme 抖音视频预估用户覆盖量结果
     */
    public \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseAwemeData $aweme;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseVideoAppData $video_app 西瓜视频预估用户覆盖量结果
     */
    public \AdOceanSdk\Tools\Data\ToolsEstimateAudienceGetResponseVideoAppData $video_app;
    
    /**
     * @var array $hotsoon 火山视频预估用户覆盖量结果
     */
    public array $hotsoon;
    
}