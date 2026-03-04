<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 共享的资产范围 (单个资产、组织直属资产、组织及下属组织资产)
class ToolsEbpAssetAuthPostResponseFailedRecordsAssetScopeData extends Data
{

    /**
     * @var int $asset_type 资产类型
     */
    public int $asset_type;

    /**
     * @var int $asset_scope 共享资产范围
     */
    public int $asset_scope;

    /**
     * @var int $asset_scope_type 资产范围类型，枚举值:
     */
    public int $asset_scope_type;

}