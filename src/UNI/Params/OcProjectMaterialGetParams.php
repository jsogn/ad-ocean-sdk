<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Params;

use AdOceanSdk\RequestParams;

class OcProjectMaterialGetParams extends RequestParams
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
     * @var \AdOceanSdk\UNI\Data\OcProjectMaterialGetParamFilteringData $filtering 过滤器
     */
    public \AdOceanSdk\UNI\Data\OcProjectMaterialGetParamFilteringData $filtering;

    /**
     * @var int $page 页码，默认值：1，当且仅当material_type=VIDEO 视频、IMAGE 图片、CAROUSEL 图文、TRIAL_PLAY_MATERIAL试玩素材时支持传入
     */
    public int $page;

    /**
     * @var int $page_size 页面大小，允许值：10, 20, 50, 100，默认值：10，仅material_type=VIDEO 视频时支持传入
     */
    public int $page_size;

}