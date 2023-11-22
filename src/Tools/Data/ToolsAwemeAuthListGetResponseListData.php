<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 数据列表
class ToolsAwemeAuthListGetResponseListData extends Data
{

    /**
     * @var string $auth_type 授权类型，枚举值：
     */
    public string $auth_type;
    
    /**
     * @var string $aweme_id 抖音号
     */
    public string $aweme_id;
    
    /**
     * @var string $aweme_name 抖音账号名称
     */
    public string $aweme_name;
    
    /**
     * @var string $auth_status 授权状态，枚举值：
     */
    public string $auth_status;
    
    /**
     * @var string $sub_status 授权子状态，枚举值：
     */
    public string $sub_status;
    
    /**
     * @var string $start_time 授权开始时间，格式为yyyy-MM-dd HH:mm:ss
     */
    public string $start_time;
    
    /**
     * @var string $end_time 授权结束时间，格式为yyyy-MM-dd HH:mm:ss
     */
    public string $end_time;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsAwemeAuthListGetResponseListVideoInfoData $video_info 授权视频信息，若为单视频授权会返回
     */
    public \AdOceanSdk\Tools\Data\ToolsAwemeAuthListGetResponseListVideoInfoData $video_info;
    
}