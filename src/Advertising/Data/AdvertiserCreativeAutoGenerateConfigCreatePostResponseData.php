<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class AdvertiserCreativeAutoGenerateConfigCreatePostResponseData extends Data
{

    /**
     * @var int $config_id 配置ID
     */
    public int $config_id;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostResponseTemplatesData> $templates 保存成功的模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostResponseTemplatesData::class)]
    public array $templates;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostResponseErrorsData> $errors 保存失败的模板列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertising\Data\AdvertiserCreativeAutoGenerateConfigCreatePostResponseErrorsData::class)]
    public array $errors;
    
}