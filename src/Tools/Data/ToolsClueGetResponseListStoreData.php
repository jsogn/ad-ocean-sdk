<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 门店信息
class ToolsClueGetResponseListStoreData extends Data
{

    /**
     * @var int $store_id 门店ID
     */
    public int $store_id;
    
    /**
     * @var string $store_name 门店名称
     */
    public string $store_name;
    
    /**
     * @var int $store_pack_id 门店活动ID
     */
    public int $store_pack_id;
    
    /**
     * @var string $store_pack_name 门店活动名称
     */
    public string $store_pack_name;
    
    /**
     * @var string $store_location 门店所在地
     */
    public string $store_location;
    
    /**
     * @var string $store_address 门店详细地址
     */
    public string $store_address;
    
    /**
     * @var string $store_remark 门店备注
     */
    public string $store_remark;
    
    /**
     * @var string $store_pack_remark 门店活动备注
     */
    public string $store_pack_remark;
    
}