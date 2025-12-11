<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeTemplateListGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeTemplateListGetResponseListsData> $lists 模版列表
     */
    public array $lists;
    
}