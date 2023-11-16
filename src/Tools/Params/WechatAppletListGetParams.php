<?php
declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;
use AdOceanSdk\Tools\Data\WechatAppletListGetParamsFilteringData;

class WechatAppletListGetParams extends RequestParams
{
    /**
     * @var int $advertiser_id 必填 广告主ID
     */
    public int $advertiser_id;

    /**
     * @var WechatAppletListGetParamsFilteringData 过滤条件
     */
    public WechatAppletListGetParamsFilteringData $filtering;

    public int $page;

    public int $page_size;
}