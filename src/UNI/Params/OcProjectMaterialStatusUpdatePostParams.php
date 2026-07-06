<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class OcProjectMaterialStatusUpdatePostParams extends RequestParams
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
     * @var array<\AdOceanSdk\UNI\Data\OcProjectMaterialStatusUpdatePostParamData> $data 批量更新项目素材启用状态，list长度限制1～100
     */
    public array $data;

}
