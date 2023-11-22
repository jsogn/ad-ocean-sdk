<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 游标分页信息，当分页方式为cursor+count时返回
class FileVideoAwemeGetResponseCursorInfoData extends Data
{

    /**
     * @var bool $has_more 是否有下一页
     */
    public bool $has_more;
    
    /**
     * @var int $cursor 下一次分页拉取的游标值
     */
    public int $cursor;
    
}