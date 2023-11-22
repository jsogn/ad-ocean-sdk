<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Params;

use AdOceanSdk\RequestParams;

class AdvertiserCreativeGetGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetGetParamFilteringData $filtering 过滤条件，若此字段不传，或传空则视为无限制条件
     */
    public \AdOceanSdk\Advertising\Data\AdvertiserCreativeGetGetParamFilteringData $filtering;
    
    /**
     * @var array<string> $fields 查询字段集合, 如果指定, 则返回结果数组中, 每个元素是包含所查询字段的字典，默认全部指定允许值:"creative_id","ad_id","advertiser_id","status","opt_status","image_mode","title","creative_word_ids","third_party_id","image_ids","image_id","video_id","materials"
     */
    public array $fields;
    
    /**
     * @var int $page 页数默认值:1，page范围为[1,99999]，2022年1月6号生效注：page+page_size与cursor+count为两种分页方式，返回参数只返回与入参对应的分页参数page+page_size适用于获取数据记录数<10000的场景
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10，page_size范围为[1,100]，2022年1月6号生效注：page+page_size与cursor+count为两种分页方式，返回参数只返回与入参对应的分页参数page+page_size适用于获取数据记录数<10000的场景
     */
    public int $page_size;
    
    /**
     * @var int $cursor 页码游标值，第一次拉取，传入0同时传入时，cursor优先级大于page；同时不传入默认走page逻辑注：page+page_size与cursor+count为两种分页方式，返回参数只返回与入参对应的分页参数cursor+count适用于获取数据记录数≥10000的场景
     */
    public int $cursor;
    
    /**
     * @var int $count 页面数据量注：page+page_size与cursor+count为两种分页方式，返回参数只返回与入参对应的分页参数cursor+count适用于获取数据记录数≥10000的场景
     */
    public int $count;
    
}