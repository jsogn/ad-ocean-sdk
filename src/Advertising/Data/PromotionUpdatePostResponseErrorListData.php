<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 错误list，广告为分块更新，存在部分内容更新失败，部分内容更新成功的的情况若广告更新成功，则返回为空数组若更新失败，则返回错误的部分及原因
class PromotionUpdatePostResponseErrorListData extends Data
{

    /**
     * @var string $object_type 错误对象类型枚举值：BASIC广告基本设置、MATERIAL广告素材组合、BUDGET广告预算 KEYWORDS 搜索关键词
     */
    public string $object_type;
    
    /**
     * @var int $error_code 错误信息
     */
    public int $error_code;
    
    /**
     * @var string $error_keyword 更新错误的搜索关键词
     */
    public string $error_keyword;
    
    /**
     * @var string $error_message 错误信息
     */
    public string $error_message;
    
}