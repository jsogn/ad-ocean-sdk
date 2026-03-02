<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// EBP资产查询范围
class DpaEbpLibraryListGetParamAssetQueryScopeData extends Data
{

    /**
     * @var string $permission_scope 权限范围，不传默认全部，可选值: All 组织创建的及被其他组织共享的资产Authed 被其他组织共享的资产Managed 入参组织创建的资产 默认值: Managed
     */
    public string $permission_scope;

    /**
     * @var string $hierarchy 资产归属层级范围，默认查询当前组织及下级组织全部资产，可选值:
     */
    public string $hierarchy;

}