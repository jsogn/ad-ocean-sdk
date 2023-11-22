<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileAudioAdPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $upload_type 音频上传方式
：允许值，
     */
    public string $upload_type;
    
    /**
     * @var string $audio_signature 音频的md5值(用于服务端校验)
     */
    public string $audio_signature;
    
    /**
     * @var mixed $audio_file 音频文件，upload_type为UPLOAD_BY_FILE时必填
     */
    public mixed $audio_file;
    
    /**
     * @var string $audio_url 音频url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     */
    public string $audio_url;
    
}