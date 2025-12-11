<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Params;

use AdOceanSdk\RequestParams;

class ReportCustomGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主id
     */
    public int $advertiser_id;
    
    /**
     * @var string $data_topic 数据主题，默认值：BASIC_DATA广告基础数据枚举值：BASIC_DATA广告基础数据、QUERY_DATA搜索词数据、BIDWORD_DATA关键词数据、MATERIAL_DATA素材数据、PRODUCT_DATA产品数据 、ONE_KEY_BOOST_DATA一键起量（巨量广告升级版）、DMP_DATA人群包数据、VIDEO_DUARATION_DATA视频分秒数据注：从巨量引擎体验版平台获取到API参数生成后需在请求参数中手动添加对应的数据主题，否则将无法正确获取数据
     */
    public string $data_topic;
    
    /**
     * @var array<string> $dimensions 维度列表。获取方式：1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
     */
    public array $dimensions;
    
    /**
     * @var array<string> $metrics 指标列表 。获取方式：1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
     */
    public array $metrics;
    
    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomGetParamFiltersData> $filters 过滤条件。获取方式：1.巨量引擎体验版—>报表—>新建/编辑自定义报表—>API参数生成。该字段从前端自定义报表中获取，建议不要修改。2.可通过【获取自定义报表可用维度和指标】接口获取不同数据主题下的可用维度和指标
     */
    public array $filters;
    
    /**
     * @var string $start_time 开始时间。格式为：yyyy-MM-dd。例如2022-08-01
     */
    public string $start_time;
    
    /**
     * @var string $end_time 结束时间。格式为：yyyy-MM-dd。例如2022-08-01
     */
    public string $end_time;
    
    /**
     * @var array<\AdOceanSdk\Report\Data\ReportCustomGetParamOrderByData> $order_by 排序
     */
    public array $order_by;
    
    /**
     * @var int $page 页码。默认为1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小。默认为10，最大100
     */
    public int $page_size;
    
}