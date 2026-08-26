<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 筛选条件对象
class EbpMaterialListGetParamFilteringData extends Data
{

    /**
     * @var string $material_name 素材名称模糊匹配
     */
    public string $material_name;

    /**
     * @var array<int> $material_ids 素材 ID
     */
    public array $material_ids;

    /**
     * @var array<int> $custom_tag_ids EBP 自定义标签 ID
     */
    public array $custom_tag_ids;

    /**
     * @var array<int> $system_tag_ids EBP 系统标签稳定配置 ID
     */
    public array $system_tag_ids;

    /**
     * @var array<string> $image_modes 素材类型：
CREATIVE_IMAGE_MODE_VIDEO=横版视频，
CREATIVE_IMAGE_MODE_VIDEO_VERTICAL=竖版视频，
CREATIVE_IMAGE_MODE_VIDEO_SPLASH=开屏视频 可选值: CREATIVE_IMAGE_MODE_VIDEO 横版视频CREATIVE_IMAGE_MODE_VIDEO_VERTICAL 竖版视频CREATIVE_IMAGE_MODE_VIDEO_SPLASH 开屏视频
     */
    public array $image_modes;

    /**
     * @var array<string> $evaluate_types 评估类型：FIRST_PUBLISH=首发，AD_HIGH_QUALITY=AD 优质，ECP_HIGH_QUALITY=ECP 优质
优质素材需同时传入 AD 和 ECP 两种 可选值: FIRST_PUBLISH 首发素材AD_HIGH_QUALITY AD 优质素材ECP_HIGH_QUALITY ECP 优质素材
     */
    public array $evaluate_types;

}