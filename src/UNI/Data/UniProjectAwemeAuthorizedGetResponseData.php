<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class UniProjectAwemeAuthorizedGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\UNI\Data\UniProjectAwemeAuthorizedGetResponseAwemeIdListData> $aweme_id_list 抖音号列表
     */
    public array $aweme_id_list;

    /**
     * @var bool $has_more 是否已获取全部全域可用抖音号，允许值：TRUE 已获取FALSE 仍存在未获取全域可用抖音号
     */
    public bool $has_more;

}