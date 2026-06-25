<?php

declare(strict_types=1);

namespace AdOceanSdk\OcProject\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ProjectRejectReasonGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseListData> $list 审核建议列表
     */
    public array $list;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}