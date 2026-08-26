<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class EbpMaterialListGetParams extends RequestParams
{

    /**
     * @var int $account_id EBP 组织 ID
     */
    public int $account_id;

    /**
     * @var string $material_range all: 全部可见; self: 仅直属
     */
    public string $material_range;

    /**
     * @var \AdOceanSdk\Tools\Data\EbpMaterialListGetParamFilteringData $filtering 筛选条件对象
     */
    public \AdOceanSdk\Tools\Data\EbpMaterialListGetParamFilteringData $filtering;

    /**
     * @var int $page 页码
     */
    public int $page;

    /**
     * @var int $page_size 页面大小
     */
    public int $page_size;

}