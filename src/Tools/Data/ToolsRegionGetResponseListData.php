<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 行业列表
class ToolsRegionGetResponseListData extends Data
{

    /**
     * @var int $id ID
     */
    public int $id;
    
    /**
     * @var string $name 名称
     */
    public string $name;
    
    /**
     * @var int $parent_id 父级id
     */
    public int $parent_id;
    
    /**
     * @var string $region_level 地域所在层级
     */
    public string $region_level;
    
}