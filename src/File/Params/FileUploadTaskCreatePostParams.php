<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class FileUploadTaskCreatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;
    
    /**
     * @var string $account_type 账户类型，允许值：ADVERTISER 广告主、AGENT 代理商
     */
    public string $account_type;
    
    /**
     * @var string $filename 素材的文件名
     */
    public string $filename;
    
    /**
     * @var array<string> $labels 标签，每个标签长度是10，最大支持50个label
     */
    public array $labels;
    
    /**
     * @var string $video_url 视频 url地址，最大支持上传文件大小：1000M
     */
    public string $video_url;
    
    /**
     * @var bool $is_aigc 视频素材是否为AIGC生成
     */
    public bool $is_aigc;
    
    /**
     * @var bool $is_guide_video 上传视频场景是否是引导视频（此功能仅游戏行业白名单客户可用，如需使用请联系运营）
     */
    public bool $is_guide_video;
    
    /**
     * @var bool $is_need_auth 标注是否允许生效授权保护（素材需要是自产）
     */
    public bool $is_need_auth;
    
}