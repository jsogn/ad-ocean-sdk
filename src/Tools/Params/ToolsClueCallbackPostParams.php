<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsClueCallbackPostParams extends RequestParams
{

    /**
     * @var array<string> $advertiser_ids 广告主id列表
     */
    public array $advertiser_ids;
    
    /**
     * @var int $clue_convert_state 线索当前事件状态，可选值:
     */
    public int $clue_convert_state;
    
    /**
     * @var string $clue_id 线索ID
     */
    public string $clue_id;
    
    /**
     * @var int $source 广告来源，新版深度转化 source为1 允许值：0,1
     */
    public int $source;
    
    /**
     * @var string $click_id clickid是一个加密字符串，代表的是字节的关键广告信息。需要从三方落地页url 中的 clickid 参数获取值。
     */
    public string $click_id;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsClueCallbackPostParamEventDataData $event_data 无效事件标签；若clue_convert_state = INVALID_EVENT，则该字段必填
     */
    public \AdOceanSdk\Tools\Data\ToolsClueCallbackPostParamEventDataData $event_data;
    
}