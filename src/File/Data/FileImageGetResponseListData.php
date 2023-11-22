<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class FileImageGetResponseListData extends Data
{

    /**
     * @var string $id 图片ID
     */
    public string $id;
    
    /**
     * @var int $material_id 素材id，即多合一报表中的素材id，一个素材唯一对应一个素材id
     */
    public int $material_id;
    
    /**
     * @var int $size 图片大小
     */
    public int $size;
    
    /**
     * @var int $width 图片宽度
     */
    public int $width;
    
    /**
     * @var int $height 图片高度
     */
    public int $height;
    
    /**
     * @var string $url 图片预览地址，仅限同主体进行素材预览查看，若非同主体会返回“素材所属主体与开发者主体不一致无法获取URL”
链接仅做预览使用，预览链接有效期为1小时
     */
    public string $url;
    
    /**
     * @var string $format 图片格式
     */
    public string $format;
    
    /**
     * @var string $signature 图片md5
     */
    public string $signature;
    
    /**
     * @var string $create_time 素材的上传时间，格式："yyyy-mm-dd HH:MM:SS"
     */
    public string $create_time;
    
    /**
     * @var string $filename 素材的文件名
     */
    public string $filename;
    
    /**
     * @var bool $aigc 素材是否是aigc生成
     */
    public bool $aigc;
    
}