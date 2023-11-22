<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 基础创意信息
class AdvertiserCreativeDetailGetResponseAdDataData extends Data
{

    /**
     * @var int $third_industry_id 三级行业ID
     */
    public int $third_industry_id;
    
    /**
     * @var array<string> $ad_keywords 创意标签
     */
    public array $ad_keywords;
    
    /**
     * @var string $params_type 链接类型
     */
    public string $params_type;
    
    /**
     * @var string $dpa_external_url_field 落地页链接字段选择
     */
    public string $dpa_external_url_field;
    
    /**
     * @var string $external_url 落地页链接
     */
    public string $external_url;
    
    /**
     * @var string $external_url_params 落地页检测参数
     */
    public string $external_url_params;
    
    /**
     * @var string $source 广告来源
     */
    public string $source;
    
    /**
     * @var string $enable_smart_source 是否开启来源智能生成
     */
    public string $enable_smart_source;
    
    /**
     * @var string $ies_core_user_id 绑定抖音号
     */
    public string $ies_core_user_id;
    
    /**
     * @var int $is_feed_and_fav_see 主页作品列表隐藏广告内容
     */
    public int $is_feed_and_fav_see;
    
    /**
     * @var string $playable_url 搭配试玩素材URL
     */
    public string $playable_url;
    
    /**
     * @var int $creative_auto_generate_switch 是否开启自动派生创意
     */
    public int $creative_auto_generate_switch;
    
    /**
     * @var int $is_presented_video 自动生成视频素材
     */
    public int $is_presented_video;
    
    /**
     * @var string $app_name 应用名
     */
    public string $app_name;
    
    /**
     * @var string $web_url Android应用下载详情页
     */
    public string $web_url;
    
    /**
     * @var int $is_comment_disable 是否关闭评论
     */
    public int $is_comment_disable;
    
    /**
     * @var int $ad_download_status 是否允许客户端下载视频
     */
    public int $ad_download_status;
    
    /**
     * @var string $priority_trial 是否优先调起试玩
     */
    public string $priority_trial;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataSupplementsData> $supplements 云游戏素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataSupplementsData::class)]
    public array $supplements;
    
    /**
     * @var array<string> $dynamic_creative_switch 启用动态创意类型
     */
    public array $dynamic_creative_switch;
    
    /**
     * @var string $open_url 直达链接
     */
    public string $open_url;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataMiniProgramInfoData $mini_program_info 字节小程序信息
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeDetailGetResponseAdDataMiniProgramInfoData $mini_program_info;
    
    /**
     * @var string $anchor_related_type 原生锚点启用类型
     */
    public string $anchor_related_type;
    
    /**
     * @var string $anchor_type 锚点类型
     */
    public string $anchor_type;
    
    /**
     * @var string $anchor_id 锚点id
     */
    public string $anchor_id;
    
}