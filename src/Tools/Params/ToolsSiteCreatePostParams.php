<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 站点名称，范围：长度 >= 1
     */
    public string $name;
    
    /**
     * @var array $bricks 站点业务数据。具体的格式见下方的7大组件格式，list中每个object在站点页面上按照顺序从上到下排列。
     */
    public array $bricks;
    
    /**
     * @var string $site_type 建站类型，创建接口仅支持以下枚举：
     */
    public string $site_type;
    
}