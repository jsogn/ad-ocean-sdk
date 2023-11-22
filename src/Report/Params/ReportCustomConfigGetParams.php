<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class ReportCustomConfigGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<string> $data_topics 数据主题查询列表，允许值：
     */
    public array $data_topics;
    
}