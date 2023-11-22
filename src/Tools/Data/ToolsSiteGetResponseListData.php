<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 建站列表
class ToolsSiteGetResponseListData extends Data
{

    /**
     * @var string $siteId 建站id
     */
    public string $siteId;
    
    /**
     * @var string $name 建站名称
     */
    public string $name;
    
    /**
     * @var string $status 建站状态，详见附录【附录-枚举值-建站状态】
     */
    public string $status;
    
    /**
     * @var string $siteType 建站类型，详见附录【附录-枚举值-建站类型】
     */
    public string $siteType;
    
    /**
     * @var string $function_type 建站类别，SITE_FUNC_TYPE_NEW_MODULAR（智能建站）SITE_FUNC_TYPE_NORMAL（普通建站）
     */
    public string $function_type;
    
    /**
     * @var string $thumbnail 站点缩略图
     */
    public string $thumbnail;
    
}