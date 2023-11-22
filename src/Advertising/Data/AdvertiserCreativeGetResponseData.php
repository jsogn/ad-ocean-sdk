<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值, 字典类型, 包含下面字段
class AdvertiserCreativeGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseCursorInfoData $cursor_info 游标分页信息，当分页方式为cursor+count时返回
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseCursorInfoData $cursor_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseListData $list
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetResponseListData $list;
    
}