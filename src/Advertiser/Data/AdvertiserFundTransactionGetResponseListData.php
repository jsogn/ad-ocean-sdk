<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// data中元素，其中每个元素字段如下
class AdvertiserFundTransactionGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $transaction_type 流水类型，详见附录【流水类型】，包含转账、充值
     */
    public string $transaction_type;
    
    /**
     * @var string $create_time 流水产生时间
     */
    public string $create_time;
    
    /**
     * @var int $amount 交易总金额(单位元)
     */
    public int $amount;
    
    /**
     * @var int $cash 现金总金额(单位元)
     */
    public int $cash;
    
    /**
     * @var int $grant 赠款总金额(单位元）
     */
    public int $grant;
    
    /**
     * @var int $return_goods 返货总金额(单位元)
     */
    public int $return_goods;
    
    /**
     * @var int $transaction_seq 交易流水号
     */
    public int $transaction_seq;
    
    /**
     * @var int $remitter 付款方，即广告主id。
     */
    public int $remitter;
    
    /**
     * @var int $payee 收款方，即广告主id。
     */
    public int $payee;
    
    /**
     * @var int $dealbase 返点
     */
    public int $dealbase;
    
}