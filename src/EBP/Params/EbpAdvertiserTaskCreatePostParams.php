<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Params;

use AdOceanSdk\RequestParams;

class EbpAdvertiserTaskCreatePostParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 旧版巨量引擎工作台ID
     */
    public int $enterprise_organization_id;

    /**
     * @var string $account_source 账户类型，允许值：AD 巨量营销客户账号LOCAL 本地推
     */
    public string $account_source;

}