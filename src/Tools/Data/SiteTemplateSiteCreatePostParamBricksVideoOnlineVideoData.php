<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 在线视频内容，与本地视频内容二选一
class SiteTemplateSiteCreatePostParamBricksVideoOnlineVideoData extends Data
{

    /**
     * @var string $origin_url 视频原始地址，例如https://v.youku.com/v_show/id_xxx.html，当前仅支持优酷视频，当online_video不为空时，必填
     */
    public string $origin_url;
    
    /**
     * @var string $poster_url 用户自行上传的图片url，选填，不填充该字段时，会读取线上视频原封面
     */
    public string $poster_url;
    
}