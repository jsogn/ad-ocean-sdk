<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileMaterialAttributesListGetParams extends RequestParams
{

    /**
     * @var int $account_id 各平台账户id，必须同时选择account_type类型
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型， 可选值:
     */
    public string $account_type;
    
    /**
     * @var \AdOceanSdk\File\Data\FileMaterialAttributesListGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\File\Data\FileMaterialAttributesListGetParamFilteringData $filtering;
    
    /**
     * @var bool $return_lowquality_suggestions 应答参数是否返回低质原因，不传或传入false时，应答参数不返回低质原因
     */
    public bool $return_lowquality_suggestions;
    
    /**
     * @var int $page_size 页面数据量，默认值: 100，page*page_size 最大1000
     */
    public int $page_size;
    
    /**
     * @var int $page 页码，默认值: 1，page*page_size 最大1000
     */
    public int $page;
    
}