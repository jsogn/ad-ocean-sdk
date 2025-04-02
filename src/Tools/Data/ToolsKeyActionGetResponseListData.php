<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 线索列表
class ToolsKeyActionGetResponseListData extends Data
{

    /**
     * @var int $adv_id 广告主ID
     */
    public int $adv_id;
    
    /**
     * @var string $name 活动名
     */
    public string $name;
    
    /**
     * @var int $ad_plan_name 计划名
     */
    public int $ad_plan_name;
    
    /**
     * @var int $ad_plan_id 计划plan id
     */
    public int $ad_plan_id;
    
    /**
     * @var int $clue_id 线索id
     */
    public int $clue_id;
    
    /**
     * @var string $req_id 当前线索对应广告的请求id
     */
    public string $req_id;
    
    /**
     * @var int $site_id 站点id
     */
    public int $site_id;
    
    /**
     * @var int $cid cid
     */
    public int $cid;
    
    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;
    
}