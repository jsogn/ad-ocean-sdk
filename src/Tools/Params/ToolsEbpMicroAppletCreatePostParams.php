<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMicroAppletCreatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID，资产将会被创建在入参账户ID下
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，允许值：
     */
    public string $account_type;

    /**
     * @var string $app_id 字节小程序app id
     */
    public string $app_id;

    /**
     * @var string $remark 小程序备注
     */
    public string $remark;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMicroAppletCreatePostParamSchemaInfoData> $schema_info 小程序链接，审核通过前只能创建一条
     */
    public array $schema_info;

    /**
     * @var array $data 小程序其他信息，具体传值规范参考下方说明
     */
    public array $data;

}