<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 过滤条件，若此字段不传，或传空则视为无限制条件
class CampaignGetParamFilteringData extends Data
{

    /**
     * @var array<int> $ids 广告组ID过滤，数组，不超过100个
     */
    public array $ids;
    
    /**
     * @var string $campaign_name 广告组name过滤，长度为1-30个字符，其中1个中文字符算2位
     */
    public string $campaign_name;
    
    /**
     * @var string $landing_type 广告组推广目的过滤，详见【附录-推广目的类型】
     */
    public string $landing_type;
    
    /**
     * @var string $status 广告组状态过滤，默认为返回“所有不包含已删除”，如果要返回所有包含已删除有对应枚举表示，详见【附录-广告组状态】
     */
    public string $status;
    
    /**
     * @var string $campaign_create_time 广告组创建时间，格式yyyy-mm-dd，表示过滤出当天创建的广告组
     */
    public string $campaign_create_time;
    
}