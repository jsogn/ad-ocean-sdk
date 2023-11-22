<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AudiencePackageGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesData> $audience_packages 定向包信息
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\AudiencePackageGetResponseAudiencePackagesData::class)]
    public array $audience_packages;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}