<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户列表
class FundSharedWalletBalanceGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 账户id
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Fund\Data\FundSharedWalletBalanceGetResponseListBalanceDetailData> $balance_detail 余额详情列表
     */
    public array $balance_detail;
    
    /**
     * @var string $status 余额查询状态，SUCCESS：成功、FAIL：失败、NO_WALLET：钱包不存在
     */
    public string $status;
    
    /**
     * @var string $status_message 状态说明
     */
    public string $status_message;
    
}