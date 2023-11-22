<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 复制成功列表，整体失败不返回该列表
class ToolsSiteCopyPostResponseSuccessListData extends Data
{

    /**
     * @var string $origin_site_id 返回复制成功的原站点id
     */
    public string $origin_site_id;
    
    /**
     * @var string $site_id 返回复制成功后生成的新站点id
     */
    public string $site_id;
    
}