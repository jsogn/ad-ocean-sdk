<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpCategoryGetGetResponseListData extends Data
{

    /**
     * @var string $id 分类id
     */
    public string $id;

    /**
     * @var string $name 分类名称
     */
    public string $name;

    /**
     * @var string $parent 父级分类id，没有父级则为-1
     */
    public string $parent;

    /**
     * @var array $subs 子级分类，嵌套递归
     */
    public array $subs;

}