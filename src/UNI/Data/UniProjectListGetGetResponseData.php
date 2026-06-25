<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class UniProjectListGetGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectListGetGetResponseListData> $list 项目列表
     */
    public array $list;

}