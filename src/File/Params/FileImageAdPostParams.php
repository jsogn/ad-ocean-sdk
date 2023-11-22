<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileImageAdPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $upload_type 图片上传方式
默认值：UPLOAD_BY_FILE
允许值：UPLOAD_BY_FILE、UPLOAD_BY_URL 可选值:
     */
    public string $upload_type;
    
    /**
     * @var string $image_signature 图片的md5值(用于服务端校验)
upload_type为UPLOAD_BY_FILE
     */
    public string $image_signature;
    
    /**
     * @var \AdOceanSdk\File\Data\FileImageAdPostParamImageFileData $image_file 图片文件
upload_type为UPLOAD_BY_FILE必填
格式: jpg、jpeg、png、bmp、gif, 大小1.5M内
     */
    public \AdOceanSdk\File\Data\FileImageAdPostParamImageFileData $image_file;
    
    /**
     * @var string $image_url 图片url地址，如http://xxx.xxx
upload_type为UPLOAD_BY_URL必填
     */
    public string $image_url;
    
    /**
     * @var string $filename 素材的文件名，可自定义素材名，不传则默认取文件名，最长255个字符
注：若同一素材已进行上传，重新上传不会改名
     */
    public string $filename;
    
    /**
     * @var bool $is_aigc 图片素材是否为AIGC生成
     */
    public bool $is_aigc;
    
}