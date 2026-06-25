<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var string $name 项目名称，长度是1-50个字（两个英文字符占1个字）
     */
    public string $name;

    /**
     * @var string $delivery_product 营销产品，可选值: ALBUM 剧目
     */
    public string $delivery_product;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectCreatePostParamRelatedProductData $related_product 关联产品投放相关参数
     */
    public \AdOceanSdk\UNI\Data\UniProjectCreatePostParamRelatedProductData $related_product;

    /**
     * @var string $aweme_id 抖音号id，可通过【获取全域创编可用抖音号】接口获取当投放载体=抖音号时，有效且必填，单次请求最多支持传入一个抖音号id
     */
    public string $aweme_id;

    /**
     * @var float $budget 项目预算，单位为元填写限制：取值范围[300，9999999.99]，小数点后两位
     */
    public float $budget;

    /**
     * @var float $uni_roi_goal ROI系数取值范围[0，5]
     */
    public float $uni_roi_goal;

    /**
     * @var string $monetization_mode 投放变现模式，允许值：IAP用户付费IAA_AND_IAP混合变现
     */
    public string $monetization_mode;

    /**
     * @var string $schedule_type 投放时间类型，允许值：SCHEDULE_FROM_NOW从今天起长期投放SCHEDULE_START_END 设置开始和结束日期
     */
    public string $schedule_type;

    /**
     * @var string $start_time 投放起始时间，当schedule_type = SCHEDULE_START_END时必填
如：2017-01-01 精确到天。
     */
    public string $start_time;

    /**
     * @var string $end_time 投放结束时间，当schedule_type = SCHEDULE_START_END时必填
如：2017-01-01 精确到天
     */
    public string $end_time;

    /**
     * @var string $schedule_time 投放时段，默认全时段投放，格式是48*7位字符串，且都是0或1。也就是以半个小时为最小粒度，周一至周日每天分为48个区段，0为不投放，1为投放，不传、全传0、全传1均代表全时段投放。
例如：000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000000000000000000000000001111000000000000000000000，则投放时段为周一到周日的11:30~13:30
     */
    public string $schedule_time;

    /**
     * @var string $aigc_dynamic_creative_switch 是否开启AIGC动态创意，系统将根据创意生态要求生成素材探索，不传表示开启，创建后支持修改。可选值：ON 开启（默认值）OFF 关闭
     */
    public string $aigc_dynamic_creative_switch;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectCreatePostParamAudienceData $audience 定向设置
     */
    public \AdOceanSdk\UNI\Data\UniProjectCreatePostParamAudienceData $audience;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectCreatePostParamBrandInfoData $brand_info 品牌信息，仅关联云图的客户可以按需填写，以下参数可通过【获取关联云图的投放账户信息】获取
     */
    public \AdOceanSdk\UNI\Data\UniProjectCreatePostParamBrandInfoData $brand_info;

    /**
     * @var string $source 自定义抖音名称
     */
    public string $source;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectCreatePostParamVideoMaterialListData> $video_material_list 视频素材信息，单剧目在创建时最多设置视频素材 200 个如需上传更多视频素材，可通过【批量添加项目下素材】接口追投
     */
    public array $video_material_list;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectCreatePostParamPlayletSeriesUrlInfoData> $playlet_series_url_info 短剧专辑链接信息，注意：IAA链接仅支持传入1个，IAP链接最多支持传入10个
     */
    public array $playlet_series_url_info;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectCreatePostParamTitleMaterialListData> $title_material_list 标题素材信息，单剧目最多设置标题素材100个
     */
    public array $title_material_list;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectCreatePostParamProductInfoData $product_info 产品信息
     */
    public \AdOceanSdk\UNI\Data\UniProjectCreatePostParamProductInfoData $product_info;

    /**
     * @var array<string> $call_to_action_buttons 行动号召文案，字数限制：[2-6]，数组上限为10
     */
    public array $call_to_action_buttons;

}