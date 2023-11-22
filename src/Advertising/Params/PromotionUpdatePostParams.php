<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class PromotionUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
     */
    public int $advertiser_id;

    /**
     * @var int $promotion_id 广告ID，广告ID要属于广告主ID
     */
    public int $promotion_id;

    /**
     * @var string $name 广告名称，长度是1-50个字（两个英文字符占1个字）。名称不可重复
     */
    public string $name;

    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamPromotionMaterialsData $promotion_materials 广告素材组合，landing type=NATIVE_ACTION&&marketing_goal= LIVE，promotion_materials需传空
     */
    public \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamPromotionMaterialsData $promotion_materials;

    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamNativeSettingData $native_setting 原生广告设置
     */
    public \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamNativeSettingData $native_setting;

    /**
     * @var string $source 广告来源，字数限制：[2-10]（英文字符限制：[4-20]）当landing_type =LINK、MICRO_GAME、SHOP、QUICK_APP时必填
     */
    public string $source;

    /**
     * @var string $is_comment_disable 广告评论，ON为启用，OFF为不启用，默认值：ON允许值:ON、OFF注：nventory_type 仅包含INVENTORY_UNION_SLOT（穿山甲）时，不支持广告评论
     */
    public string $is_comment_disable;

    /**
     * @var \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamBrandInfoData $brand_info 品牌信息（仅关联云图和cdp的广告主可按需传入）
     */
    public \AdOceanSdk\Advertising\Data\PromotionUpdatePostParamBrandInfoData $brand_info;

    /**
     * @var float $budget 预算（24小时内修改预算操作，不能超过20次，24小时是指自然天的24小时；单次修改预算幅度不能低于100元（增加或者减少）；修改后预算金额，不能低于当前已消费金额的105%；取值范围: ≥ 0;）
     */
    public float $budget;

    /**
     * @var float $cpa_bid 目标转化出价/预期成本， 取值范围：0.01-10000元；当pricing为OCPM、OCPC出价方式时必填，取值范围：0.1-10000注意：当 bid_type =NO_BID时，不填写该字段，否则会报错
     */
    public float $cpa_bid;

    /**
     * @var float $deep_cpabid 深度优化出价，deep_bid_type =DEEP_BID_MIN时必填。取值范围：0.1~10000元注意：当 bid_type =NO_BID时，不填写该字段，否则会报错
     */
    public float $deep_cpabid;

    /**
     * @var float $roi_goal 深度转化ROI系数, 范围(0,5]，精度：保留小数点后四位，当 deep_bid_type =ROI_COEFFICIENT时必填注意：当 bid_type=NO_BID时，不填写该字段，否则会报错
     */
    public float $roi_goal;

    /**
     * @var int $union_bid_ratio 穿山甲系数，为投放到穿山甲的广告设置出价系数，只支持精度为小数点后2位，范围[0.3，3]
     */
    public int $union_bid_ratio;

    /**
     * @var string $auto_extend_traffic 智能拓流
     */
    public string $auto_extend_traffic;

    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionUpdatePostParamKeywordsData> $keywords 关键词列表，关键词和智能拓流二者必须开启一个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\PromotionUpdatePostParamKeywordsData::class)]
    public array $keywords;

}