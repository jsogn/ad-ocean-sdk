<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Params;

use AdOceanSdk\RequestParams;

class SharedWalletMainWalletGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID，对于巨量AD、千川、本地推是广告主ID，对于代理商是代理商ID
     */
    public int $account_id;
    
    /**
     * @var int $main_wallet_id 共享钱包ID即大钱包ID
     */
    public int $main_wallet_id;
    
    /**
     * @var string $account_type 账户类型 可选值:
     */
    public string $account_type;
    
}