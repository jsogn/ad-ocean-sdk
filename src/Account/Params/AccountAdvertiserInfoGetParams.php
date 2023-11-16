<?php

declare(strict_types=1);

namespace AdOceanSdk\Account\Params;

use AdOceanSdk\RequestParams;

class AccountAdvertiserInfoGetParams extends RequestParams
{

    /**
     * @var array<int> $advertiser_ids 广告主ID集合(如果包含没有访问权限的ID,将返回no permission error)取值范围: 1-100
     */
    public array $advertiser_ids;
    
    /**
     * @var array<string> $fields 查询字段集合, 默认:查询所有。字段详见下方response字段定义允许值: id、name、role、status、address、reason、license_url、license_no、license_province、license_city、company、brand、promotion_area、promotion_center_province、promotion_center_city、industry、create_time、note
     */
    public array $fields;
    
}