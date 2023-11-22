<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsPreAuditSendPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsPreAuditSendPostParamPreAuditMaterialsData> $pre_audit_materials 前置预审物料列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\ToolsPreAuditSendPostParamPreAuditMaterialsData::class)]
    public array $pre_audit_materials;
    
}