<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 标题素材信息，单剧目最多设置标题素材100个
class UniProjectCreatePostParamTitleMaterialListData extends Data
{

    /**
     * @var string $title 创意标题
     */
    public string $title;

}