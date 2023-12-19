<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告主ID
class AdvertiserFundDailyStatGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $date 日期
     */
    public string $date;
    
    /**
     * @var float $balance 日终结余(单位元）
     */
    public float $balance;
    
    /**
     * @var float $cash_cost 现金支出(单位元)
     */
    public float $cash_cost;
    
    /**
     * @var float $cost 总支出(单位元)
     */
    public float $cost;
    
    /**
     * @var float $frozen 冻结(单位元)
     */
    public float $frozen;
    
    /**
     * @var float $income 总存入(单位元)
     */
    public float $income;
    
    /**
     * @var float $reward_cost 赠款支出(单位元)
     */
    public float $reward_cost;
    
    /**
     * @var float $shared_wallet_cost 共享返货支出（单位元）
     */
    public float $shared_wallet_cost;
    
    /**
     * @var float $company_wallet_cost 账户消耗的子钱包的共享余额（单位元）
     */
    public float $company_wallet_cost;
    
    /**
     * @var float $transfer_in 总转入(单位元)
     */
    public float $transfer_in;
    
    /**
     * @var float $transfer_out 总转出(单位元)
     */
    public float $transfer_out;
    
}