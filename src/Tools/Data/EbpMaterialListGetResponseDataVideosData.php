<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 视频列表
class EbpMaterialListGetResponseDataVideosData extends Data
{

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;

    /**
     * @var string $material_name 素材名称
     */
    public string $material_name;

    /**
     * @var string $signature 素材MD5
     */
    public string $signature;

    /**
     * @var string $video_id 视频vid
     */
    public string $video_id;

    /**
     * @var string $url 素材播放/预览地址
     */
    public string $url;

    /**
     * @var string $poster_url 视频封面图地址
     */
    public string $poster_url;

    /**
     * @var int $width 视频宽度
     */
    public int $width;

    /**
     * @var int $height 视频高度
     */
    public int $height;

    /**
     * @var float $duration 视频时长 (秒)
     */
    public float $duration;

    /**
     * @var int $size 文件大小 (字节)
     */
    public int $size;

    /**
     * @var string $format 文件格式
     */
    public string $format;

    /**
     * @var int $bit_rate 比特率
     */
    public int $bit_rate;

    /**
     * @var string $source 可选值: OPEN_API MAPI 上传EBP_PLATFORM 工作台上传EBP_IMPORT_TOOL 工作台导入
     */
    public string $source;

    /**
     * @var string $create_time 组织维度口径：视频绑定到 EBP 组织的时间
     */
    public string $create_time;

    /**
     * @var string $update_time 更新时间
     */
    public string $update_time;

    /**
     * @var array<\AdOceanSdk\Tools\Data\EbpMaterialListGetResponseDataVideosTagsData> $tags 当前 Root EBP 下视频活跃标签，含自定义标签和系统标签
     */
    public array $tags;

    /**
     * @var int $ebp_id 所属升级版工作台组织ID
     */
    public int $ebp_id;

}