<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsAdPreviewQrcodeGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主ID
     */
    public int $advertiser_id ;
    
    /**
     * @var string $id_type  查询条件，可选值:"ID_TYPE_PROJECT","ID_TYPE_PROMOTION"
     */
    public string $id_type ;
    
    /**
     * @var int $promotion_id  广告ID
     */
    public int $promotion_id ;
    
    /**
     * @var int $material_id 素材ID，查询素材预览时使用
     */
    public int $material_id;
    
}