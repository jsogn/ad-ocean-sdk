<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoAwemeGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $aweme_id 抖音号，通过【获取抖音授权关系】获取
     */
    public string $aweme_id;
    
    /**
     * @var \AdOceanSdk\File\Data\FileVideoAwemeGetParamFilteringData $filtering 检索条件
     */
    public \AdOceanSdk\File\Data\FileVideoAwemeGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页码，默认值：1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小， 默认值：10，取值范围1-100
     */
    public int $page_size;
    
    /**
     * @var int $cursor 页码游标值，第一次拉取，请传入0不传入或者传空字符串默认使用page+page_size注：page+page_size与cursor+count为两种分页方式
     */
    public int $cursor;
    
    /**
     * @var int $count 页面数据量注：page+page_size与cursor+count为两种分页方式
     */
    public int $count;
    
}