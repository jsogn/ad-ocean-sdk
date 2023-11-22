<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileRebateMaterialSearchGetParams extends RequestParams
{

    /**
     * @var int $agent_id 代理商帐户ID，即明点系统中ad_agent_id
     */
    public int $agent_id;
    
    /**
     * @var string $period 年月
格式：yyyy-mm
     */
    public string $period;
    
    /**
     * @var \AdOceanSdk\File\Data\FileRebateMaterialSearchGetParamFilteringData $filtering 过滤条件
     */
    public \AdOceanSdk\File\Data\FileRebateMaterialSearchGetParamFilteringData $filtering;
    
    /**
     * @var int $page 页数默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10, 最大值：500
     */
    public int $page_size;
    
}