<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class SharedWalletMainWalletGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoData $main_wallet_info 资金共享大钱包信息
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoData $main_wallet_info;
    
}