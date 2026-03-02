<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpDictGetGetResponseListData extends Data
{

    /**
     * @var int $id 词包id
     */
    public int $id;

    /**
     * @var int $dpa_id 商品库id
     */
    public int $dpa_id;

    /**
     * @var string $default_word 默认词
     */
    public string $default_word;

    /**
     * @var string $name 词包名称
     */
    public string $name;

}