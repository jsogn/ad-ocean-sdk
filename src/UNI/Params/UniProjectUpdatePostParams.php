<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var string $name 项目名称，长度是1-50个字（两个英文字符占1个字）
     */
    public string $name;

    /**
     * @var float $budget 取值范围[300，999999999.99]，小数点后两位填写限制：项目预算，单位为元
     */
    public float $budget;

    /**
     * @var float $uni_roi_goal 取值范围[0，5]全域ROI系数
     */
    public float $uni_roi_goal;

    /**
     * @var string $monetization_mode 可选值: IAA_AND_IAP 混合变现IAP 用户付费
     */
    public string $monetization_mode;

    /**
     * @var string $schedule_type 投放时间类型，允许值：SCHEDULE_FROM_NOW 从今天起长期投放SCHEDULE_START_END设置开始和结束日期
     */
    public string $schedule_type;

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
     * @var string $aigc_dynamic_creative_switch 是否开启AIGC动态创意，枚举值：ON 开启OFF 关闭
     */
    public string $aigc_dynamic_creative_switch;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamBrandInfoData $brand_info 品牌信息，仅关联云图的客户可以按需填写，以下参数可通过【获取关联云图的投放账户信息】获取
     */
    public \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamBrandInfoData $brand_info;

    /**
     * @var string $source 
     */
    public string $source;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamAudienceData $audience 定向设置
     */
    public \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamAudienceData $audience;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectUpdatePostParamPlayletSeriesUrlInfoData> $playlet_series_url_info 短剧专辑链接信息
     */
    public array $playlet_series_url_info;

    /**
     * @var \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamProductInfoData $product_info 产品信息
     */
    public \AdOceanSdk\UNI\Data\UniProjectUpdatePostParamProductInfoData $product_info;

    /**
     * @var array<string> $call_to_action_buttons 行动号召
     */
    public array $call_to_action_buttons;

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectUpdatePostParamTitleMaterialListData> $title_material_list 标题素材信息，单剧目最多设置标题素材100个
     */
    public array $title_material_list;

}