<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpAssetAuthListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponseAuthorizationsData> $authorizations 共享记录
     */
    public array $authorizations;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponsePageData $page 分页信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpAssetAuthListGetResponsePageData $page;

}