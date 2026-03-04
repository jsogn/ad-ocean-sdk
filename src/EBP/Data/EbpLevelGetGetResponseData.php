<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class EbpLevelGetGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\EBP\Data\EbpLevelGetGetResponseSubTeamData> $sub_team 子组织列表
     */
    public array $sub_team;

}