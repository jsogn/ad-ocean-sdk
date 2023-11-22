<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserFundGetResponseData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID或代理商ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $name 账户名
     */
    public string $name;
    
    /**
     * @var string $email 联系邮箱
     */
    public string $email;
    
    /**
     * @var int $balance 账户总余额(单位元)
     */
    public int $balance;
    
    /**
     * @var int $valid_balance 账户可用总余额(单位元)
     */
    public int $valid_balance;
    
    /**
     * @var int $cash 现金余额(单位元)
     */
    public int $cash;
    
    /**
     * @var int $valid_cash 现金可用余额(单位元)
     */
    public int $valid_cash;
    
    /**
     * @var int $grant 赠款余额(单位元)
     */
    public int $grant;
    
    /**
     * @var float $default_grant 默认广告位可用赠款余额(单位元)
     */
    public float $default_grant;
    
    /**
     * @var float $common_grant 通用广告位可用赠款余额(单位元)
     */
    public float $common_grant;
    
    /**
     * @var float $search_grant 搜索广告位可用赠款余额(单位元)
     */
    public float $search_grant;
    
    /**
     * @var float $union_grant 穿山甲广告位可用赠款余额(单位元)
     */
    public float $union_grant;
    
    /**
     * @var int $valid_grant 赠款可用余额(单位元)
     */
    public int $valid_grant;
    
    /**
     * @var int $return_goods_abs 返货余额(单位元)，仅支持部分广告主
     */
    public int $return_goods_abs;
    
    /**
     * @var int $valid_return_goods_abs 返货可用余额(单位元)，仅支持部分广告主
     */
    public int $valid_return_goods_abs;
    
    /**
     * @var int $return_goods_cost 返货支出(单位元)，仅支持部分广告主
     */
    public int $return_goods_cost;
    
    /**
     * @var int $return_goods_grant 返货赠款
     */
    public int $return_goods_grant;
    
    /**
     * @var int $compensation_grant 赔付赠款
     */
    public int $compensation_grant;
    
    /**
     * @var int $return_goods_valid_grant 返货可用赠款
     */
    public int $return_goods_valid_grant;
    
    /**
     * @var int $compensation_valid_grant 赔付可用赠款
     */
    public int $compensation_valid_grant;
    
    /**
     * @var string $wallet_id 钱包id（广告主账户绑定的共享子钱包id）
     */
    public string $wallet_id;
    
    /**
     * @var string $wallet_name 钱包名称（广告主账户绑定的共享子钱包名称）
     */
    public string $wallet_name;
    
    /**
     * @var int $wallet_total_balance_valid 账户绑定的子钱包的可用共享余额（单位元）
     */
    public int $wallet_total_balance_valid;
    
}