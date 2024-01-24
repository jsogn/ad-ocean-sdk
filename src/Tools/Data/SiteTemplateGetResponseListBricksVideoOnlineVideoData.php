<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 在线视频内容
class SiteTemplateGetResponseListBricksVideoOnlineVideoData extends Data
{

    /**
     * @var string $origin_url 视频原始地址，例如https://v.youku.com/v_show/id_xxx.html，当前仅支持优酷视频，当online_video不为空时，有值
     */
    public string $origin_url;
    
    /**
     * @var string $poster_url 视频封面图链接，当online_video不为空时，有值
     */
    public string $poster_url;
    
}