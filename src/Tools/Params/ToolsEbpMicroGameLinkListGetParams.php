<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMicroGameLinkListGetParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，允许值：
     */
    public string $account_type;

    /**
     * @var int $instance_id 字节小游戏资产ID
     */
    public int $instance_id;

    /**
     * @var string $app_id 小游戏原始id（tt开头的id）
     */
    public string $app_id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetParamCreateTimeData $create_time 按创建时间范围筛选查询
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMicroGameLinkListGetParamCreateTimeData $create_time;

    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，默认值为10，最大值100
     */
    public int $page_size;

}