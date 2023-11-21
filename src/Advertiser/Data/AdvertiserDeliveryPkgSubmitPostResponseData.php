<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserDeliveryPkgSubmitPostResponseData extends Data
{

    /**
     * @var int $pkg_id 推广产品组id，可用于后续的查询或编辑
     */
    public int $pkg_id;
    
    /**
     * @var array<int> $qualification_ids 系统生成的资质id，每份资质对应一个id
     */
    public array $qualification_ids;
    
}