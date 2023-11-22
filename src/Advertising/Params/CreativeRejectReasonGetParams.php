<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class CreativeRejectReasonGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $creative_ids 广告创意ID，长度限制：1～10。创意ID需要属于当前广告主，否则会报错。只有审核不通过的创意才有审核建议，审核通过的创意没有审核建议。（所有的程序化创意都是审核通过的）
     */
    public array $creative_ids;
    
}