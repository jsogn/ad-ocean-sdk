<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CreativeUpdateStatusPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $creative_ids 创意ID列表，长度限制1～100；创意ID需属于广告主，否则会报错！
     */
    public array $creative_ids;
    
    /**
     * @var string $opt_status 操作, "enable"表示启用, "disable"表示暂停允许值:"enable","disable"，如果创意本身已经删除，进行此类操作会报错
     */
    public string $opt_status;
    
}