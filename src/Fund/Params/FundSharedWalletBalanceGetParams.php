<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class FundSharedWalletBalanceGetParams extends RequestParams
{

    /**
     * @var array<int> $advertiser_ids 广告主ID列表，长度1-100
     */
    public array $advertiser_ids;
    
}