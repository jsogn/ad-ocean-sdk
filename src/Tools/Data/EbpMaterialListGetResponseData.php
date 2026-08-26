<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class EbpMaterialListGetResponseData extends Data
{

    /**
     * @var \AdOceanSdk\Tools\Data\EbpMaterialListGetResponseDataData $data 返回数据
     */
    public \AdOceanSdk\Tools\Data\EbpMaterialListGetResponseDataData $data;

    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;

}