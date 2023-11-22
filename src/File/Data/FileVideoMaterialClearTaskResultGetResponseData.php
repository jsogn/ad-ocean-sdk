<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class FileVideoMaterialClearTaskResultGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\File\Data\FileVideoMaterialClearTaskResultGetResponseClearResultData> $clear_result 清理结果
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\FileVideoMaterialClearTaskResultGetResponseClearResultData::class)]
    public array $clear_result;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}