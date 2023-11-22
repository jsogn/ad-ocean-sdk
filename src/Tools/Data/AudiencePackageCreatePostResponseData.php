<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AudiencePackageCreatePostResponseData extends Data
{

    /**
     * @var int $audience_package_id 生成的定向包id
     */
    public int $audience_package_id;
    
}