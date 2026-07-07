<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class SubscribeAccountsAddPostResponseData extends Data
{

    /**
     * @var array<int> $failed_advertiser_ids 添加失败的adv list
     */
    public array $failed_advertiser_ids;

    /**
     * @var string $failed_reason 添加失败的原因
     */
    public string $failed_reason;

}