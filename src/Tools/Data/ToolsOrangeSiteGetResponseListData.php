<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 建站列表
class ToolsOrangeSiteGetResponseListData extends Data
{

    /**
     * @var string $site_id 建站id
     */
    public string $site_id;
    
    /**
     * @var string $name 建站名称
     */
    public string $name;
    
    /**
     * @var string $status 建站状态，详见附录【附录-枚举值-建站状态】
     */
    public string $status;
    
    /**
     * @var string $site_type 建站类型，详见附录【附录-枚举值-建站状态】
     */
    public string $site_type;
    
    /**
     * @var string $function_type 建站类别，SITE_FUNC_TYPE_NEW_MODULAR（智能建站）SITE_FUNC_TYPE_NORMAL（普通建站）
     */
    public string $function_type;
    
    /**
     * @var string $thumbnail 站点缩略图
     */
    public string $thumbnail;
    
    /**
     * @var string $url 建站url链接
     */
    public string $url;
    
}