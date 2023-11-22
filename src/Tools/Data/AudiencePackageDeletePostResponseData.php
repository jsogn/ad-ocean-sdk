<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AudiencePackageDeletePostResponseData extends Data
{

    /**
     * @var int $audience_package_id 删除的定向包id
     */
    public int $audience_package_id;
    
}