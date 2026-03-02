<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频列表
class ToolsEbpVideoUpdatePostResponseVideosData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;

    /**
     * @var string $status_code 更新状态，枚举值：SUCCESS 成功FAILURE 失败（原因：操作视频非当前投放账户所有或操作的视频不存在）
     */
    public string $status_code;

}