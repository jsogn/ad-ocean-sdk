<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class UniProjectCreatePostResponseData extends Data
{

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

}