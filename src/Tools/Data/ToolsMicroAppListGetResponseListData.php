<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序列表
class ToolsMicroAppListGetResponseListData extends Data
{

    /**
     * @var int $instance_id 小程序资产id
     */
    public int $instance_id;
    
    /**
     * @var string $remark 字节小程序备注名称
     */
    public string $remark;
    
    /**
     * @var string $app_id 字节小程序app id
     */
    public string $app_id;
    
    /**
     * @var string $audit_status 审核状态:
     */
    public string $audit_status;
    
    /**
     * @var string $reason 审核拒绝原因
     */
    public string $reason;
    
    /**
     * @var int $advertiser_id 所属广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;
    
    /**
     * @var string $modify_time 修改时间
     */
    public string $modify_time;
    
    /**
     * @var string $name 字节小程序名称
     */
    public string $name;
    
}