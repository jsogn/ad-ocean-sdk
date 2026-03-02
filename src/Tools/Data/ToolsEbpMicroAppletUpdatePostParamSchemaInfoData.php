<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序链接，创建链接或更新链接时，存在两种录入方式：
class ToolsEbpMicroAppletUpdatePostParamSchemaInfoData extends Data
{

    /**
     * @var int $id 链接id，通过【小程序详情接口】接口获取。
     */
    public int $id;

    /**
     * @var string $link 小程序链接，以 sslocal://microapp 开头
     */
    public string $link;

    /**
     * @var string $remark 链接备注
     */
    public string $remark;

    /**
     * @var string $operate_type 操作类型，允许值：
     */
    public string $operate_type;

    /**
     * @var string $start_page 启动页面，形如：page/home/xxx。不得以反斜线开头，不得以反斜线结尾，请避免参数中出现特殊字符
     */
    public string $start_page;

    /**
     * @var string $start_param 启动参数，形如：name=zhangsan&age=25。不得以问号、连接符等特殊字符开头，请确保各参数间仅使用一个连接符
     */
    public string $start_param;

}