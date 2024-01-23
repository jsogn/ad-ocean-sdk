<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 礼包内的礼品配置，数量限制0～8
class NativeAnchorDetailGetResponseListGameAnchorGamePackageListGiftData extends Data
{

    /**
     * @var string $gift_name 礼品名称，字符限制0～8
     */
    public string $gift_name;
    
    /**
     * @var string $gift_image_url 礼品图片
     */
    public string $gift_image_url;
    
    /**
     * @var int $gift_amount 礼品数量，0～6
     */
    public int $gift_amount;
    
    /**
     * @var string $gift_unit 礼品单位 可选值:
     */
    public string $gift_unit;
    
}