<?php

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\ResponsePageInfoData;

class WechatAppletListGetResponseData extends Data
{
    public ResponsePageInfoData $page_info;

    /**
     * @var WechatAppletListGetResponseDataListData[] 微信小程序列表
     */
    public array $list;
}