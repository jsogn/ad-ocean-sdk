<?php
declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

class WechatAppletListGetParamsFilteringCreateTimeData extends Data
{
    /**
     * @var string $start_time 创建起始时间，格式：%Y-%m-%d
     */
    public string $start_time;

    /**
     * @var string $end_time 创建结束时间，格式：%Y-%m-%d
     */
    public string $end_time;
}