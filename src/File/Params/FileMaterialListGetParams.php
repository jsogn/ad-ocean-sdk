<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileMaterialListGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主 id
     */
    public int $advertiser_id ;
    
    /**
     * @var string $material_source  素材来源，允许值：
     */
    public string $material_source ;
    
    /**
     * @var array<string> $properties_filter 素材标签过滤项，允许值：
     */
    public array $properties_filter;
    
    /**
     * @var string $start_time 素材创建时间，格式为yyyy-mm-dd HH:MM:SS，最早允许传入时间&默认时间：2022-01-01 00:00:00
     */
    public string $start_time;
    
    /**
     * @var string $end_time 素材结束时间，格式为yyyy-mm-dd HH:MM:SS，默认为当前时间
     */
    public string $end_time;
    
    /**
     * @var int $page 页数默认值: 1
     */
    public int $page;
    
    /**
     * @var int $page_size 页面大小默认值:10, 最大值：1000
     */
    public int $page_size;
    
}