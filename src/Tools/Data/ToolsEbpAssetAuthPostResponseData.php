<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpAssetAuthPostResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpAssetAuthPostResponseFailedRecordsData> $failed_records 共享失败信息
     */
    public array $failed_records;

}