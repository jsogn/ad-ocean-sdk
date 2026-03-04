<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 子组织列表
class EbpLevelGetGetResponseSubTeamData extends Data
{

    /**
     * @var int $team_id 子组织id
     */
    public int $team_id;

    /**
     * @var string $team_name 子组织名称
     */
    public string $team_name;

    /**
     * @var array $sub_team 组织下的子组织列表
     */
    public array $sub_team;

}