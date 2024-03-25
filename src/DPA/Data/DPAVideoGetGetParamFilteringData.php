<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class DPAVideoGetGetParamFilteringData extends Data
{

    /**
     * @var array<int> $product_platform_ids 商品库ids，长度限制 50个
     */
    public array $product_platform_ids;
    
    /**
     * @var array<int> $product_ids 商品库商品ids，长度限制 50个
     */
    public array $product_ids;
    
    /**
     * @var string $start_time 视频创建的筛选起始时间
     */
    public string $start_time;
    
    /**
     * @var string $end_time 视频创建的筛选结束时间
     */
    public string $end_time;
    
    /**
     * @var string $image_mode 素材类型，详见【附录-枚举值-素材类型】可选值:CREATIVE_IMAGE_MODE_VIDEO：横版视频,CREATIVE_IMAGE_MODE_VIDEO_VERTICAL：竖版视频
     */
    public string $image_mode;
    
    /**
     * @var string $package_id 根据视频模板id搜索，精确匹配，长度限制 50字
     */
    public string $package_id;
    
    /**
     * @var string $package_name 根据视频模板名称搜索，精确匹配 长度限制 50字
     */
    public string $package_name;
    
}