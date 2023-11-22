<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 标签摘要信息
class CreativeDetailGetResponseCreativeAbstractMaterialsStructAbstractInfoData extends Data
{

    /**
     * @var string $abstract_label 摘要标签
     */
    public string $abstract_label;
    
    /**
     * @var string $abstract_text 摘要内容
     */
    public string $abstract_text;
    
}