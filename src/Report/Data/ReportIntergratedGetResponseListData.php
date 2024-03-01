<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 以下为list中每个元素的字段
class ReportIntergratedGetResponseListData extends Data
{

    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetResponseListDimensionsData $dimensions 维度数据
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetResponseListDimensionsData $dimensions;
    
    /**
     * @var \AdOceanSdk\Report\Data\ReportIntergratedGetResponseListMetricsData $metrics 数据指标
     */
    public \AdOceanSdk\Report\Data\ReportIntergratedGetResponseListMetricsData $metrics;
    
    /**
     * @var int $submit_certification_count 提交身份认证数-出行行业司机在应用内提交身份认证的次数司机端，司机提交身份认证的次数
     */
    public int $submit_certification_count;
    
    /**
     * @var int $approval_count 通过身份认证数-出行行业司机在应用内成功通过身份认证的次数司机端，司机通过身份认证的次数
     */
    public int $approval_count;
    
    /**
     * @var int $first_order_count 乘客首次下单数-出行行业乘客在应用内首次成功下单的数量乘客端，乘客首次发单的次数
     */
    public int $first_order_count;
    
    /**
     * @var int $first_rental_order_count 司机首次完单数-出行行业司机在应用内首次成功完成订单的数量司机端，司机首次完成订单的次数
     */
    public int $first_rental_order_count;
    
    /**
     * @var int $commute_first_pay_count 乘客首次支付数-出行行业乘客在应用内首次成功支付订单的数量乘客端，乘客首次支付订单的次数
     */
    public int $commute_first_pay_count;
    
}