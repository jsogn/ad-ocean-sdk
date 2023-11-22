<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileVideoAdPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $upload_type 视频/音频上传方式
     */
    public string $upload_type;
    
    /**
     * @var string $video_signature 视频的md5值(用于服务端校验)
upload_type为UPLOAD_BY_File必填
     */
    public string $video_signature;
    
    /**
     * @var file $video_file upload_type为UPLOAD_BY_File必填
     */
    public file $video_file;
    
    /**
     * @var string $filename upload_type为UPLOAD_BY_URL必填
     */
    public string $filename;
    
    /**
     * @var array<string> $labels 标签
     */
    public array $labels;
    
    /**
     * @var string $video_url 视频 url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     */
    public string $video_url;
    
    /**
     * @var bool $is_aigc 视频素材是否为AIGC生成
     */
    public bool $is_aigc;
    
}