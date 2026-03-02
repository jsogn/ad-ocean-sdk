<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpVideoAttributesListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 企业版组织（默认值）
     */
    public string $account_type;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpVideoAttributesListGetParamFilteringData $filtering 筛选条件
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpVideoAttributesListGetParamFilteringData $filtering;

    /**
     * @var bool $return_lowquality_suggestions 当素材为低质素材时，是否返回素材低质原因
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