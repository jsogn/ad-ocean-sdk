<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMicroAppletLinkListGetParams extends RequestParams
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
     * @var int $instance_id 需要查询的字节小程序资产ID
     */
    public int $instance_id;

    /**
     * @var int $page 页码，默认值为1
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，默认值为10，最大值100
     */
    public int $page_size;

    /**
     * @var string $app_id 字节小程序资产原始ID
     */
    public string $app_id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetParamCreateTimeData $create_time 按创建时间范围筛选查询
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpMicroAppletLinkListGetParamCreateTimeData $create_time;

}