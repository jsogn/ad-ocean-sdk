<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpVideoUploadPostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值: EBP 升级版（默认值）
     */
    public string $account_type;

    /**
     * @var string $upload_type 视频上传方式，可选值: UPLOAD_BY_FILE 文件上传（默认值）UPLOAD_BY_URL URL链接上传
     */
    public string $upload_type;

    /**
     * @var string $video_signature 时有效且必填
     */
    public string $video_signature;

    /**
     * @var file $video_file 
     */
    public file $video_file;

    /**
     * @var string $file_name 素材的文件名，可自定义素材名，不传择默认取文件名，最长255个字符同一素材已上传，重新上传不会修改文件名称
     */
    public string $file_name;

    /**
     * @var array<string> $labels 标签
     */
    public array $labels;

    /**
     * @var string $video_url 视频url地址
     */
    public string $video_url;

    /**
     * @var bool $is_aigc 视频素材是否为AIGC生成
     */
    public bool $is_aigc;

}