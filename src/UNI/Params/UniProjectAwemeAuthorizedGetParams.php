<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectAwemeAuthorizedGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $playlet_id 剧目id
     */
    public int $playlet_id;

    /**
     * @var int $page 页码
默认值： 1
     */
    public int $page;

}