<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class ToolsAdPreviewQrcodeGetResponseDataData extends Data
{

    /**
     * @var int $advertiser_id 
     */
    public int $advertiser_id;
    
    /**
     * @var string $id_type 
     */
    public string $id_type;
    
    /**
     * @var int $promotion_id 
     */
    public int $promotion_id;
    
    /**
     * @var int $material_id 
     */
    public int $material_id;
    
    /**
     * @var string $qrcode_msg_url 
     */
    public string $qrcode_msg_url;
    
}