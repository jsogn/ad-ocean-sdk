<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileVideoDeletePostResponseData extends Data
{

    /**
     * @var array<string> $fail_video_ids 操作失败的video_id列表，不在此列表内的素材表示删除成功
     */
    public array $fail_video_ids;
    
    /**
     * @var array<int> $fail_material_ids 操作失败的fail_material_id列表，不在此列表内的素材表示删除成功
     */
    public array $fail_material_ids;
    
}