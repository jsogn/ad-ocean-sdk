<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据信息
class CustomAudienceSelectGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\DMP\Data\CustomAudienceSelectGetResponseCustomAudienceListData> $custom_audience_list 人群包列表数据
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\DMP\Data\CustomAudienceSelectGetResponseCustomAudienceListData::class)]
    public array $custom_audience_list;
    
    /**
     * @var int $offset 偏移,类似于SQL中offset(起始为0,翻页时new_offset=old_offset+limit）
     */
    public int $offset;
    
    /**
     * @var int $total_num 总的人群包数量
     */
    public int $total_num;
    
}