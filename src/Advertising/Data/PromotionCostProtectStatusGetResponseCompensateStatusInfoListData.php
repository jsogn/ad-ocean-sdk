<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class PromotionCostProtectStatusGetResponseCompensateStatusInfoListData extends Data
{

    /**
     * @var int $query_id 请求计划id
     */
    public int $query_id;
    
    /**
     * @var string $status 当前请求是否成功, 枚举值:
     */
    public string $status;
    
    /**
     * @var string $compensate_status 成本保障状态 枚举值:
     */
    public string $compensate_status;
    
    /**
     * @var dict[string] $invalid_reasons 成本保障失效原因 枚举值:
     */
    public dict[string] $invalid_reasons;
    
    /**
     * @var dict[string] $end_reasons 成本保障结束原因
     */
    public dict[string] $end_reasons;
    
    /**
     * @var int $compensate_amount 赔付金额
     */
    public int $compensate_amount;
    
    /**
     * @var string $url 赔付规则链接
     */
    public string $url;
    
}