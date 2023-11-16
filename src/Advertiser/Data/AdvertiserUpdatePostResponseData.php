<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserUpdatePostResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $need_audit 此次修改是否触发进入待审状态(1表示进入待审状态,0表示不进入待审状态)
     */
    public int $need_audit;
    
}