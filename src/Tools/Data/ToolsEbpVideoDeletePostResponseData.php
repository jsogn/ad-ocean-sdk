<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpVideoDeletePostResponseData extends Data
{

    /**
     * @var array<int> $fail_material_ids 操作失败的素材ID列表，不在此列表内的素材表示删除成功
     */
    public array $fail_material_ids;

}