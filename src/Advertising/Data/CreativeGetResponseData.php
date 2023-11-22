<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值, 字典类型, 包含下面字段
class CreativeGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeGetResponseCursorInfoData $cursor_info 游标分页信息，当分页方式为cursor+count时返回
     */
    public \AdOceanSdk\Advertising\Data\CreativeGetResponseCursorInfoData $cursor_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeGetResponseListData $list
     */
    public \AdOceanSdk\Advertising\Data\CreativeGetResponseListData $list;
    
}