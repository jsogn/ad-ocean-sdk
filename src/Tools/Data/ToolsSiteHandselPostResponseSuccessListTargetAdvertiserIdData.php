<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回转赠成功的目标广告主id
class ToolsSiteHandselPostResponseSuccessListTargetAdvertiserIdData extends Data
{

    /**
     * @var string $site_id 转赠成功后的生成的新站点id，失败的数据无此参数返回
     */
    public string $site_id;
    
}