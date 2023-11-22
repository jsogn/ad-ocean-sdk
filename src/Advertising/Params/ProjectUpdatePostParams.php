<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class ProjectUpdatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告账户id
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
     * @var float $search_bid_ratio 出价系数，默认系数为1，出价系数可通过【获取快投推荐出价系数】查询，小数点后最多两位,取值范围 [1.00,2.00]
     */
    public float $search_bid_ratio;
    
    /**
     * @var string $audience_extend 定向拓展，允许值：ON:开启，OFF:关闭
     */
    public string $audience_extend;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamKeywordsData> $keywords 待添加搜索关键词列表，一个项目最多可添加1000
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamKeywordsData::class)]
    public array $keywords;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectUpdatePostParamAudienceData $audience 定向设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectUpdatePostParamAudienceData $audience;
    
    /**
     * @var array<int> $dpa_categories 商品投放范围，分类列表，由【DPA商品广告-获取DPA分类】 得到
     */
    public array $dpa_categories;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamDpaProductTargetData> $dpa_product_target 自定义筛选条件（商品投放条件）。用于圈定商品投放范围，结合商品库字段搭配判断条件，圈定商品投放范围。获取商品库元信息-商品广告-商业开放平台
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\ProjectUpdatePostParamDpaProductTargetData::class)]
    public array $dpa_product_target;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectUpdatePostParamTrackUrlSettingData $track_url_setting 监测链接设置
     */
    public \AdOceanSdk\Advertising\Data\ProjectUpdatePostParamTrackUrlSettingData $track_url_setting;
    
}