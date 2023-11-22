<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Params;

use AdOceanSdk\RequestParams;

class CustomAudienceSelectGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var int $select_type 查询类型,枚举值："0"：该广告主创建的人群包和被推送给该广告主的人群包，"1"：状态为可投放的人群包
     */
    public int $select_type;
    
    /**
     * @var int $offset 偏移,类似于SQL中offset(起始为0,翻页时new_offset=old_offset+limit），默认值：0，取值范围:≥ 0
     */
    public int $offset;
    
    /**
     * @var int $limit 返回数据量，默认值：100，取值范围：1-100
     */
    public int $limit;
    
}