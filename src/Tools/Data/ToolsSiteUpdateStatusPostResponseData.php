<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteUpdateStatusPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsSiteUpdateStatusPostResponseFailData> $fail 更新失败的site_id的list及失败的原因。如果全部更新成功，len(list) = 0
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsSiteUpdateStatusPostResponseFailData::class)]
    public array $fail;

    /**
     * @var array<string> $success 更新成功的site_id列表。如果全部更新失败，len(list) = 0
     */
    public array $success;

}