<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpMicroAppletUpdatePostParams extends RequestParams
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
     * @var int $instance_id 小程序资产ID
     */
    public int $instance_id;

    /**
     * @var string $remark 备注信息，限制20个字以内
     */
    public string $remark;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpMicroAppletUpdatePostParamSchemaInfoData> $schema_info 小程序链接，创建链接或更新链接时，存在两种录入方式：
     */
    public array $schema_info;

    /**
     * @var array $data 字节小程序其他信息
     */
    public array $data;

}