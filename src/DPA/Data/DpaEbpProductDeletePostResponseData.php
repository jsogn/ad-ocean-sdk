<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpProductDeletePostResponseData extends Data
{

    /**
     * @var string $status 报错值: FAILD_AD_RELATED 删除失败，存在关联计划SUCCESS 删除成功
     */
    public string $status;

}