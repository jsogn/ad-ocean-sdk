<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMaterialAuthListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 升级版工作台（默认值）
     */
    public string $account_type;

    /**
     * @var string $material_type 素材类型，可选值: VIDEO 视频（默认值）
     */
    public string $material_type;

    /**
     * @var int $page 分页，默认值1
     */
    public int $page;

    /**
     * @var int $page_size 分页大小，数量限制[1,100]，默认值10
     */
    public int $page_size;

}