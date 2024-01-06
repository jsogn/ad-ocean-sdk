<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 动态词包ID，可使用 【查询动态词包接口】 获得，结合文本摘要内容中的词包格式您需要填写相同个数与顺序的词包ID，如果实际ID顺序与文本摘要内容中词包名顺序不一致我们将以词包ID顺序为准。
class PromotionListGetResponseListPromotionMaterialsTextAbstractListWordListData extends Data
{

    /**
     * @var int $word_id 动态词包ID
     */
    public int $word_id;
    
}