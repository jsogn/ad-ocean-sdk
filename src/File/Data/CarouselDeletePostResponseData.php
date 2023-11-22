<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class CarouselDeletePostResponseData extends Data
{

    /**
     * @var array<int> $failed_ids 批量删除失败列表
     */
    public array $failed_ids;
    
    /**
     * @var array<int> $success_list 批量删除成功列表
     */
    public array $success_list;
    
}