<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class ToolsWechatAppletUpdatePostResponseDataData extends Data
{

    /**
     * @var int $instance_id 更新成功的微信小程序资产ID
     */
    public int $instance_id;
    
    /**
     * @var string $error_message 更新失败的原因
     */
    public string $error_message;
    
}