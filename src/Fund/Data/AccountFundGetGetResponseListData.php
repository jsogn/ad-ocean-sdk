<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户余额列表，金额单位：分
class AccountFundGetGetResponseListData extends Data
{

    /**
     * @var int $account_id 账户id
     */
    public int $account_id;
    
    /**
     * @var int $balance 余额
     */
    public int $balance;
    
    /**
     * @var int $valid_balance 有效余额
     */
    public int $valid_balance;
    
    /**
     * @var int $cash 现金余额
     */
    public int $cash;
    
    /**
     * @var int $valid_cash 现金可用余额
     */
    public int $valid_cash;
    
    /**
     * @var int $grant 赠款余额
     */
    public int $grant;
    
    /**
     * @var int $default_grant 通用广告位可用赠款余额
     */
    public int $default_grant;
    
    /**
     * @var int $common_grant 信息流广告位可用赠款余额
     */
    public int $common_grant;
    
    /**
     * @var int $search_grant 搜索广告位可用赠款余额
     */
    public int $search_grant;
    
    /**
     * @var int $union_grant 穿山甲广告位可用赠款余额
     */
    public int $union_grant;
    
    /**
     * @var int $valid_grant 赠款可用余额
     */
    public int $valid_grant;
    
    /**
     * @var int $return_goods_abs 返货余额
     */
    public int $return_goods_abs;
    
    /**
     * @var int $valid_return_goods_abs 返货可用余额
     */
    public int $valid_return_goods_abs;
    
    /**
     * @var int $compensation_grant 赔付赠款
     */
    public int $compensation_grant;
    
    /**
     * @var int $compensation_valid_grant 赔付可用赠款
     */
    public int $compensation_valid_grant;
    
    /**
     * @var int $wallet_id 钱包id（广告主账户绑定的共享子钱包id）
     */
    public int $wallet_id;
    
    /**
     * @var int $wallet_total_balance_valid 账户绑定的子钱包的可用共享余额
     */
    public int $wallet_total_balance_valid;
    
}