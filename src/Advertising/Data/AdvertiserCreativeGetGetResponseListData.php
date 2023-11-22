<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class AdvertiserCreativeGetGetResponseListData extends Data
{

    /**
     * @var int $creative_id 创意ID
     */
    public int $creative_id;
    
    /**
     * @var int $ad_id 广告计划ID
     */
    public int $ad_id;
    
    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $title 创意素材标题
     */
    public string $title;
    
    /**
     * @var array<int> $creative_word_ids 动态词包列表
     */
    public array $creative_word_ids;
    
    /**
     * @var string $status 创意素材状态, 详见【附录-创意状态】
     */
    public string $status;
    
    /**
     * @var string $opt_status 创意素材操作状态, 详见【附录-创意操作状态】
     */
    public string $opt_status;
    
    /**
     * @var string $image_mode 创意素材类型, 详见【附录-素材类型】
     */
    public string $image_mode;
    
    /**
     * @var array<string> $image_ids 图片素材，图片ID列表
     */
    public array $image_ids;
    
    /**
     * @var string $image_id 视频素材，封面图片ID
     */
    public string $image_id;
    
    /**
     * @var string $video_id 视频素材，视频ID
     */
    public string $video_id;
    
    /**
     * @var string $aweme_item_id 抖音视频ID
     */
    public string $aweme_item_id;
    
    /**
     * @var string $third_party_id 第三方ID
     */
    public string $third_party_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeGetGetResponseListMetarialsData> $metarials 素材信息列表，标题，图片，视频均是不同素材，注意部分老数据可能此结构为空
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeGetGetResponseListMetarialsData::class)]
    public array $metarials;
    
    /**
     * @var string $creative_create_time 广告创意创建时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $creative_create_time;
    
    /**
     * @var string $creative_modify_time 广告创意更新时间，格式yyyy-MM-dd HH:mm:ss
     */
    public string $creative_modify_time;
    
}