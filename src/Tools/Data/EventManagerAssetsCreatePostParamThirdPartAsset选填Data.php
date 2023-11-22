<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 三方落地页资产信息
class EventManagerAssetsCreatePostParamThirdPartAsset选填Data extends Data
{

    /**
     * @var string $name选填 落地页名称，长度限制为25，一个字符长度为1
     */
    public string $name选填;
    
    /**
     * @var string $description选填 落地页名称，长度限制为150，一个字符长度为1
     */
    public string $description选填;
    
}