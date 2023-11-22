<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsBpAssetManagementShareGetParams extends RequestParams
{

    /**
     * @var int $organization_id 纵横组织账户id
     */
    public int $organization_id;
    
    /**
     * @var string $asset_type 可选值:
     */
    public string $asset_type;
    
    /**
     * @var int $instance_id 资产ID
     */
    public int $instance_id;
    
    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小，默认值为10，最大值200
     */
    public int $page_size;
    
    /**
     * @var string $share_type 可选值:
     */
    public string $share_type;
    
}