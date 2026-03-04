<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Params;

use AdOceanSdk\RequestParams;

class EbpLevelGetGetParams extends RequestParams
{

    /**
     * @var int $enterprise_organization_id 工作台组织ID
     */
    public int $enterprise_organization_id;

}