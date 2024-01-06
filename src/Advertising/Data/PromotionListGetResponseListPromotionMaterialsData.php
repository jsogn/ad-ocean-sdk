<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告素材组合
class PromotionListGetResponseListPromotionMaterialsData extends Data
{

    /**
     * @var string $params_type 链接类型(落地页)
     */
    public string $params_type;
    
    /**
     * @var string $external_url_field 落地页链接字段选择
     */
    public string $external_url_field;
    
    /**
     * @var string $external_url_params 落地页检测参数
     */
    public string $external_url_params;
    
    /**
     * @var array<string> $external_url_material_list 普通落地页链接素材
     */
    public array $external_url_material_list;
    
    /**
     * @var array<string> $web_url_material_list Android应用下载详情页
     */
    public array $web_url_material_list;
    
    /**
     * @var string $open_url_type 直达链接类型
     */
    public string $open_url_type;
    
    /**
     * @var string $open_url_field 直达链接字段选择
     */
    public string $open_url_field;
    
    /**
     * @var string $open_url_params 直达链接检测参数
     */
    public string $open_url_params;
    
    /**
     * @var string $open_url 直达链接，用于打开电商app，调起店铺
     */
    public string $open_url;
    
    /**
     * @var array<string> $open_urls 电商优选直达链接组
     */
    public array $open_urls;
    
    /**
     * @var string $ulink 直达备用链接
     */
    public string $ulink;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsVideoMaterialListData> $video_material_list 视频素材信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsVideoMaterialListData::class)]
    public array $video_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsImageMaterialListData> $image_material_list 创意图片素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsImageMaterialListData::class)]
    public array $image_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTitleMaterialListData> $title_material_list 标题素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTitleMaterialListData::class)]
    public array $title_material_list;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsProductInfoData $product_info 产品信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsProductInfoData $product_info;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsDecorationMaterialData $decoration_material 家装卡券素材
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsDecorationMaterialData $decoration_material;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTextAbstractListData> $text_abstract_list 文本摘要信息，单广告可添加1-10个，长度25-45个字
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsTextAbstractListData::class)]
    public array $text_abstract_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsCarouselMaterialListData> $carousel_material_list 创意图文素材
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsCarouselMaterialListData::class)]
    public array $carousel_material_list;
    
    /**
     * @var string $dynamic_creative_switch 动态创意开关，允许值：ON开启（默认值），OFF关闭
     */
    public string $dynamic_creative_switch;
    
    /**
     * @var string $auto_extend_traffic 智能拓流,允许值：ON开启（默认值）； OFF关闭
     */
    public string $auto_extend_traffic;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsKeywordsData> $keywords 搜索直投关键词列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsKeywordsData::class)]
    public array $keywords;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsComponentMaterialListData> $component_material_list 创意组件信息。
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsComponentMaterialListData::class)]
    public array $component_material_list;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsAnchorMaterialListData> $anchor_material_list 锚点信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsAnchorMaterialListData::class)]
    public array $anchor_material_list;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsMiniProgramInfoData $mini_program_info 字节小程序信息
     */
    public \AdOceanSdk\Advertising\Data\PromotionListGetResponseListPromotionMaterialsMiniProgramInfoData $mini_program_info;
    
    /**
     * @var array<string> $playable_url_material_list 试玩落地页素材
     */
    public array $playable_url_material_list;
    
    /**
     * @var array<string> $call_to_action_buttons 行动号召文案
     */
    public array $call_to_action_buttons;
    
    /**
     * @var string $intelligent_generation 智能生成行动号召按钮
     */
    public string $intelligent_generation;
    
}