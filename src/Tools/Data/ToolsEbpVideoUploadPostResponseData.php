<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class ToolsEbpVideoUploadPostResponseData extends Data
{

    /**
     * @var string $video_id 视频ID
     */
    public string $video_id;

    /**
     * @var int $size 视频大小
     */
    public int $size;

    /**
     * @var int $width 视频宽度
     */
    public int $width;

    /**
     * @var int $height 视频高度
     */
    public int $height;

    /**
     * @var string $video_url 视频地址（url格式）
     */
    public string $video_url;

    /**
     * @var float $duration 视频时长
     */
    public float $duration;

    /**
     * @var string $cover_image_url 封面图url（用于预览）
     */
    public string $cover_image_url;

    /**
     * @var string $cover_image_uri 封面图uri（用于创编）
     */
    public string $cover_image_uri;

    /**
     * @var int $material_id 素材ID
     */
    public int $material_id;

    /**
     * @var string $video_signature 视频的md5值
     */
    public string $video_signature;

}