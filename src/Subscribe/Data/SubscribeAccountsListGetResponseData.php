<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class SubscribeAccountsListGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Subscribe\Data\SubscribeAccountsListGetResponseAdvertisersData> $advertisers 投放账户列表
     */
    public array $advertisers;

    /**
     * @var int $next_cursor 游标值
     */
    public int $next_cursor;

    /**
     * @var int $count 数量
     */
    public int $count;

}