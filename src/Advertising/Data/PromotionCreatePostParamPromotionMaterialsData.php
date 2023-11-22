<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告素材组合
class PromotionCreatePostParamPromotionMaterialsData extends Data
{

    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsVideoMaterialListData> $video_material_list 视频素材信息，上限10个，video_material_list 与 image_material_list 最少传入一种
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsVideoMaterialListData::class)]
    public array $video_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsImageMaterialListData> $image_material_list 创意图片素材，上限10个，video_material_list 与 image_material_list 最少传入一种
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsImageMaterialListData::class)]
    public array $image_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTextAbstractListData> $text_abstract_list 文本摘要信息，最单广告可添加1-10个，长度25-45个字
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTextAbstractListData::class)]
    public array $text_abstract_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTitleMaterialListData> $title_material_list 标题素材，上限10个，非直播链路必填
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsTitleMaterialListData::class)]
    public array $title_material_list;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsProductInfoData $product_info 产品信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsProductInfoData $product_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsDecorationMaterialData $decoration_material 家装卡券素材
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsDecorationMaterialData $decoration_material;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsAnchorMaterialListData> $anchor_material_list 原生锚点素材，当 anchor_related_type =SELECT时必填，数量上限为1
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsAnchorMaterialListData::class)]
    public array $anchor_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsComponentMaterialListData> $component_material_list 创意组件信息。数量上限为1
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsComponentMaterialListData::class)]
    public array $component_material_list;
    
    /**
     * @var array<string> $external_url_material_list 普通落地页链接素材，上限10个
     */
    public array $external_url_material_list;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsMiniProgramInfoData $mini_program_info 字节小程序信息，当landing_type = MICRO_GAME且micro_promotion_type = BYTE_APP或BYTE_GAME时有效且必填
     */
    public \AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsMiniProgramInfoData $mini_program_info;
    
    /**
     * @var string $open_url 直达链接，
     */
    public string $open_url;
    
    /**
     * @var array<string> $open_urls 电商优选直达链接组，
     */
    public array $open_urls;
    
    /**
     * @var string $ulink 直达备用链接，支持穿山甲和站内广告位
     */
    public string $ulink;
    
    /**
     * @var array<string> $web_url_material_list Android应用下载详情页（用户点击广告中“立即下载”按钮以外的区域时所到达的页面），上限10个
     */
    public array $web_url_material_list;
    
    /**
     * @var array<string> $playable_url_material_list 试玩落地页素材，上限10个，直播链路不支持该字段可通过【获取试玩素材列表】进行获取可使用搭配试玩场景：当 landing_type =APP&& inventory_catalog =MANUAL&& download_type =DOWNLOAD_URL时（白名单功能）当 landing_type =APP&& inventory_catalog =MANUAL&&inventory_type仅有穿山甲 && union_video_type =REWARD_VIDEO时
     */
    public array $playable_url_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsCarouselMaterialListData> $carousel_material_list 图文素材信息，当ad_type=ALL时，支持上限10个；当ad_type=SEARCH时，支持上限30个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionCreatePostParamPromotionMaterialsCarouselMaterialListData::class)]
    public array $carousel_material_list;
    
    /**
     * @var string $dynamic_creative_switch 动态创意开关，允许值：ON开启（默认值），OFF关闭，当ad_type=SEARCH时有效
     */
    public string $dynamic_creative_switch;
    
    /**
     * @var array<string> $call_to_action_buttons 行动号召文案，字数限制：[2-6]，数组上限为10
     */
    public array $call_to_action_buttons;
    
    /**
     * @var string $intelligent_generation 智能生成行动号召按钮，开启后即对应的文案自动生成，可选项为OFF（默认）、ON
     */
    public string $intelligent_generation;
    
}