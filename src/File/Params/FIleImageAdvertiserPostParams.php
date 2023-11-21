<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FIleImageAdvertiserPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $upload_type 图片上传方式默认值：UPLOAD_BY_FILE允许值：UPLOAD_BY_FILE、UPLOAD_BY_URL
     */
    public string $upload_type;
    
    /**
     * @var string $image_signature 图片的md5值(用于服务端校验)，upload_type为UPLOAD_BY_FILE必填
     */
    public string $image_signature;
    
    /**
     * @var mixed $image_file 图片文件,upload_type为UPLOAD_BY_FILE必填格式: jpg、jpeg、png、bmp、gif, 大小5M内
     */
    public mixed $image_file;
    
    /**
     * @var string $image_url 图片url地址，如http://xxx.xxx，upload_type为UPLOAD_BY_URL必填
     */
    public string $image_url;
    
    /**
     * @var string $upload_to 调用上传资质默认值：CG允许值：CG：广告主资质接口、AD：投放资质接口
     */
    public string $upload_to;
    
}