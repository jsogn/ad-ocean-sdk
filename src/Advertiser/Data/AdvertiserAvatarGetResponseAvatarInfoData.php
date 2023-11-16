<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 头像信息
class AdvertiserAvatarGetResponseAvatarInfoData extends Data
{

    /**
     * @var string $web_uri 当前头像的uri
     */
    public string $web_uri;
    
    /**
     * @var string $audit_web_uri 审核中头像的uri
     */
    public string $audit_web_uri;
    
    /**
     * @var int $height 审核中头像的高度
     */
    public int $height;
    
    /**
     * @var int $width 审核中头像的宽度
     */
    public int $width;
    
    /**
     * @var string $web_url 当前头像的预览链接，有效期1h
     */
    public string $web_url;
    
    /**
     * @var string $audit_web_url 审核中头像的预览链接，有效期1h
     */
    public string $audit_web_url;
    
}