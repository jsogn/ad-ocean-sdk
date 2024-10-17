<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsSiteReadGetResponseData extends Data
{

    /**
     * @var array $bricks 具体见返回示例业务数据（新建或更新时传递的数据）
     */
    public array $bricks;

    /**
     * @var string $id 站点ID
     */
    public string $id;

    /**
     * @var string $status 站点状态，详见【附录-枚举值-站点状态】
     */
    public string $status;

    /**
     * @var string $site_type 建站类型，详见【附录-枚举值-建站类型】
     */
    public string $site_type;

    /**
     * @var string $thumbnail 缩略图（只有发布的站点才会生成）
     */
    public string $thumbnail;

}