<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频素材信息
class PromotionListGetResponseListPromotionMaterialsVideoMaterialListData extends Data
{

    /**
     * @var string $image_mode 素材类型
     */
    public string $image_mode;
    
    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;
    
    /**
     * @var string $video_cover_id 视频封面图片ID
     */
    public string $video_cover_id;
    
    /**
     * @var int $item_id 抖音短视频ID
     */
    public int $item_id;
    
    /**
     * @var string $video_hp_visibility new 原生广告视频素材主页可见性设置，该参数只针对非抖音视频生效。可选值:
     */
    public string $video_hp_visibility new;
    
    /**
     * @var string $visible_end_datenew 指定日期后隐藏，日期格式2020-01-01，只支持设置当天及以后的日期，精确到天
     */
    public string $visible_end_datenew;
    
    /**
     * @var string $guide_video_id 引导视频id，白名单能力，仅游戏行业投放关卡类广告的账号可获取到相关参数
     */
    public string $guide_video_id;
    
    /**
     * @var string $video_template_type 商品库视频生成类型
     */
    public string $video_template_type;
    
    /**
     * @var array<string> $video_task_ids 自定义商品库视频模板ID
     */
    public array $video_task_ids;
    
    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;
    
    /**
     * @var string $material_opt_status 视频素材操作状态，枚举值：
     */
    public string $material_opt_status;
    
    /**
     * @var string $material_status 素材审核状态，枚举值：
     */
    public string $material_status;
    
}