<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class UniProjectMaterialDeletePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $project_id 项目id
     */
    public int $project_id;

    /**
     * @var array<int> $material_id 素材id
     */
    public array $material_id;

}