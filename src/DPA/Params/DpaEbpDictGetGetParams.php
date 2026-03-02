<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpDictGetGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 
     */
    public string $account_type;

    /**
     * @var int $platform_id 商品库ID
     */
    public int $platform_id;

}