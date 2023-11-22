<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CreativeAutoGenerateConfigCreatePostResponseData extends Data
{

    /**
     * @var int $config_id 配置ID
     */
    public int $config_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostResponseTemplatesData> $templates 保存成功的模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostResponseTemplatesData::class)]
    public array $templates;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostResponseErrorsData> $errors 保存失败的模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\CreativeAutoGenerateConfigCreatePostResponseErrorsData::class)]
    public array $errors;
    
}