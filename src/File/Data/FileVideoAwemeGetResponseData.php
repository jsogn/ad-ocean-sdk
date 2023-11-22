<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoAwemeGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileVideoAwemeGetResponseListData> $list 抖音视频列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileVideoAwemeGetResponseListData::class)]
    public array $list;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoAwemeGetResponseCursorInfoData $cursor_info 游标分页信息，当分页方式为cursor+count时返回
     */
    public \AdOceanSdk\File\Data\FileVideoAwemeGetResponseCursorInfoData $cursor_info;
    
}