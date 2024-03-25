<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品视频模板列表
class DPAVideoGetGetResponseListData extends Data
{

    /**
     * @var int $product_platform_id 商品库id
     */
    public int $product_platform_id;
    
    /**
     * @var int $product_id 商品库商品id
     */
    public int $product_id;
    
    /**
     * @var string $package_id 商品库视频模板id
     */
    public string $package_id;
    
    /**
     * @var string $name 商品库视频模板名称
     */
    public string $name;
    
    /**
     * @var string $create_time 创建时间，格式%Y-%m-%d %H:%M:%S
     */
    public string $create_time;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListImageInfoData $image_info 视频模板封面图信息
     */
    public \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListImageInfoData $image_info;
    
    /**
     * @var \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListVideoInfoData $video_info 商品库视频模板视频信息
     */
    public \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseListVideoInfoData $video_info;
    
}