<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值,返回的操作状态信息和失败后的错误信息
class DMPCustomAudienceDeletePostResponseData extends Data
{

    /**
     * @var int $custom_audience_id 人群包id
     */
    public int $custom_audience_id;
    
}