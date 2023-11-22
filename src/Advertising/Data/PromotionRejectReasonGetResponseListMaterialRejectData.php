<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材维度审核建议列表
class PromotionRejectReasonGetResponseListMaterialRejectData extends Data
{

    /**
     * @var string $audit_platform 审核来源类型，返回值：AD广告审核、CONTENT内容审核
     */
    public string $audit_platform;
    
    /**
     * @var string $type 素材类型，枚举值：CREATIVE_IMAGE图片、CREATIVE_VIDEO视频、CREATIVE_TITLE标题、CALL_TO_ACTION行动号召、CREATIVE_URL创意详情页、PRODUCT_IMAGE产品主图、PRODUCT_SELLING_POINTS产品卖点、PRODUCT_DESCRIBE产品名称、CREATIVE_COMPONENT创意组件、ANCHOR锚点、AWEME_NICK_NAME抖音昵称
     */
    public string $type;
    
    /**
     * @var string $item 根据不同素材类型返回相应的值-CREATIVE_URL创意详情页：web_url;external_url;playable_url-CREATIVE_TITLE标题：title-CREATIVE_IMAGE图片：image_id-CREATIVE_VIDEO视频：video_id-CALL_TO_ACTION行动号召：号召文案-PRODUCT_IMAGE产品主图：image_id-PRODUCT_SELLING_POINTS产品卖点：产品卖点文案-PRODUCT_DESCRIB产品名称：产品名称文案-CREATIVE_COMPONENT创意组件：component_id-ANCHOR锚点：anchor_id-AWEME_NICK_NAME抖音昵称：抖音昵称
     */
    public string $item;
    
    /**
     * @var array<string> $reject_reason 拒绝建议
     */
    public array $reject_reason;
    
    /**
     * @var array<string> $suggestion 审核建议
     */
    public array $suggestion;
    
}