<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsSiteUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id，范围：1 <= advertiser_id <=MAX_INT64
     */
    public int $advertiser_id;
    
    /**
     * @var string $site_id 站点id，范围：长度 >= 1
     */
    public string $site_id;
    
    /**
     * @var string $name 站点名称，范围：长度 >= 1
     */
    public string $name;
    
    /**
     * @var object $bricks 站点业务数据。具体的格式见下方的4大组件格式，list中每个object在站点页面上按照顺序从上到下排列。目前只支持全量更新bricks.[，]视频组件图片组件
     */
    public object $bricks;
    
}