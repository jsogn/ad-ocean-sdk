<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序页面，审核通过前只能创建一条
class ToolsMicroAppCreatePostParamAppPageData extends Data
{

    /**
     * @var string $link 小程序链接，以 sslocal://microapp 开头
     */
    public string $link;
    
    /**
     * @var string $link_remark 链接备注
     */
    public string $link_remark;
    
    /**
     * @var string $start_page 启动页面
     */
    public string $start_page;
    
    /**
     * @var string $start_param 启动参数
     */
    public string $start_param;
    
}