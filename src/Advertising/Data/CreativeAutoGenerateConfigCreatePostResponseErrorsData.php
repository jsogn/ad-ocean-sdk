<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 保存失败的模板列表
class CreativeAutoGenerateConfigCreatePostResponseErrorsData extends Data
{

    /**
     * @var int $template_id 模板ID
     */
    public int $template_id;
    
    /**
     * @var string $error_message 错误信息列举：1.template_id查不到：模板ID不存在2.模板填充的内容校验不通过：模板填充内容不符合要求，请确认填充内容的类型、格式、大小、长度等要求3.内部报错等其他原因：系统错误
     */
    public string $error_message;
    
}