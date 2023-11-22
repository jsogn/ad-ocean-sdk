<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序页面
class ToolsMicroAppUpdatePostParamAppPageData extends Data
{

    /**
     * @var int $id 链接id，通过获取接口返回
     */
    public int $id;
    
    /**
     * @var string $link 小程序链接
     */
    public string $link;
    
    /**
     * @var string $remark 链接备注
     */
    public string $remark;
    
    /**
     * @var string $operate_type 操作类型，可选值:
     */
    public string $operate_type;
    
    /**
     * @var string $start_page 启动页面
     */
    public string $start_page;
    
    /**
     * @var string $start_param 启动参数
     */
    public string $start_param;
    
}