<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 资金共享大钱包信息
class SharedWalletMainWalletGetResponseMainWalletInfoData extends Data
{

    /**
     * @var int $main_wallet_id 大钱包ID
     */
    public int $main_wallet_id;
    
    /**
     * @var string $wallet_name 钱包名称
     */
    public string $wallet_name;
    
    /**
     * @var string $wallet_description 钱包描述
     */
    public string $wallet_description;
    
    /**
     * @var array<string> $wallet_label 钱包标签
     */
    public array $wallet_label;
    
    /**
     * @var float $total_balance 钱包总余额(单位元)
     */
    public float $total_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceData $unallocated_balance 钱包待分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoUnallocatedBalanceData $unallocated_balance;
    
    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceData $allocated_balance 钱包已分配余额(单位元)
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseMainWalletInfoAllocatedBalanceData $allocated_balance;
    
}