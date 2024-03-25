<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DPACategoryGetGetResponseListData extends Data
{

    /**
     * @var int $id 分类id
     */
    public int $id;
    
    /**
     * @var string $name 分类名称
     */
    public string $name;
    
    /**
     * @var int $parent 父级分类id，没有父级则为-1
     */
    public int $parent;
    
    /**
     * @var array $subs 子级分类，嵌套递归
     */
    public array $subs;
    
}