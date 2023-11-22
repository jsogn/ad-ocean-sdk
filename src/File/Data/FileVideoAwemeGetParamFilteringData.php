<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 检索条件
class FileVideoAwemeGetParamFilteringData extends Data
{

    /**
     * @var string $aweme_url 抖音视频链接，可在抖音端上通过【分享】-【复制链接】获取
     */
    public string $aweme_url;
    
}