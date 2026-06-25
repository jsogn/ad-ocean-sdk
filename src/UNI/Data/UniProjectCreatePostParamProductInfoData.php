<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 产品信息
class UniProjectCreatePostParamProductInfoData extends Data
{

    /**
     * @var array<string> $titles 产品名称，字数限制：[1-20]，数组上限为1本参数非必填，全域中所关联的产品会在此参数中，自动绑定一个与产品相关的title用户可在默认绑定的titles外，额外填写1个产品名称
     */
    public array $titles;

    /**
     * @var array<string> $image_ids 产品主图，尺寸要求108*108，上限10个
可通过【获取图片素材】接口获得全域中所关联的产品会在此参数中，绑定一个与产品相关主图，除了自动绑定的主图外，还需手动上传至少1个主图，上限为10个
     */
    public array $image_ids;

    /**
     * @var array<string> $selling_points 产品卖点，字数限制：[6-9]，数组上限为10
     */
    public array $selling_points;

}