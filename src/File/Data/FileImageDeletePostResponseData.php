<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileImageDeletePostResponseData extends Data
{

    /**
     * @var array<string> $fail_image_ids 操作失败的图片ID列表，不在此列表内的素材表示删除成功
     */
    public array $fail_image_ids;
    
}