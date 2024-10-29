<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件
class FileMaterialAttributesListGetParamFilteringData extends Data
{

    /**
     * @var array<int> $material_ids 按素材ID过滤，范围为1-1000
     */
    public array $material_ids;
    
    /**
     * @var array<string> $material_properties 素材标签过滤项，如果不传，则默认返回广告主ID下所有素材。
     */
    public array $material_properties;
    
    /**
     * @var string $start_time 起始日期，表示按照素材上传到账户下的时间过滤，格式为yyyy-mm-dd HH:MM:SS，最早允许传入时间：2022-01-01 00:00:00
（时间是账号和素材绑定的时间，删除重绑时间会更新）
     */
    public string $start_time;
    
    /**
     * @var string $end_time 结束日期，表示过滤出一段时间内上传的素材，格式为yyyy-mm-dd HH:MM:SS，如果传入起始日期，未传此参数，则默认为当前时间
     */
    public string $end_time;
    
    /**
     * @var string $attributes_modify_time 「存在搬运打压风险」属性最后一次更新时间，格式为yyyy-mm-dd ，筛选传入代表筛选出当天「存在搬运打压风险」发生过变化的素材信息
     */
    public string $attributes_modify_time;
    
}