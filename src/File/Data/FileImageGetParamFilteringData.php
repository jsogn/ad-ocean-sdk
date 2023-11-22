<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 图片过滤条件
class FileImageGetParamFilteringData extends Data
{

    /**
     * @var array<string> $image_ids 图片ids，可以根据图片ids（创意中使用的图片key，存在一张图片对应多个image_ids的情况）进行过滤
数量限制：<=100
注意：image_ids、material_ids、signatures只能选择一个进行过滤
     */
    public array $image_ids;
    
    /**
     * @var array<int> $material_ids 素材id列表，可以根据material_ids（素材报表使用的id，一个素材唯一对应一个素材id）进行过滤
数量限制：<=100
注意：image_ids、material_ids、signatures只能选择一个进行过滤
     */
    public array $material_ids;
    
    /**
     * @var array<string> $signatures md5值列表，可以根据素材的md5进行过滤
数量限制：<=100
注意：image_ids、material_ids、signatures只能选择一个进行过滤
     */
    public array $signatures;
    
    /**
     * @var double $width 图片宽度
     */
    public double $width;
    
    /**
     * @var double $height 图片高度
     */
    public double $height;
    
    /**
     * @var array $ratio 图片宽高比，eg: [1.7, 2.5]，输入1.7则搜索满足宽高比介于1.65-1.75之间的图片，即精度上下浮动0.05
     */
    public array $ratio;
    
    /**
     * @var string $start_time 根据图片上传时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     */
    public string $start_time;
    
    /**
     * @var string $end_time 根据图片上传时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     */
    public string $end_time;
    
}