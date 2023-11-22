<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告主列表，目前每个object中只有advertiser_id字段，后续会丰富字段
class MajordomoAdvertiserSelectGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $advertiser_name 广告主名称
     */
    public string $advertiser_name;
    
}