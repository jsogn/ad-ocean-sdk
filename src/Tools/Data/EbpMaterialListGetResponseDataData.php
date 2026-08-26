<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class EbpMaterialListGetResponseDataData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\EbpMaterialListGetResponseDataVideosData> $videos 视频列表
     */
    public array $videos;

}