<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 批量更新项目状态，包含项目ID和目标操作，list长度限制1～100
class ProjectStatusUpdatePostParamData extends Data
{

    /**
     * @var int $project_id 项目ID
     */
    public int $project_id;
    
    /**
     * @var string $opt_status 目标操作，允许值：ENABLE启用项目、DISABLE暂停项目对于删除的广告项目不可进行任何操作，否则会报错
     */
    public string $opt_status;
    
}