<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小游戏/小程序列表
class ToolsAssetLinkListGetResponseListData extends Data
{

    /**
     * @var int $link_id 链接id
     */
    public int $link_id;
    
    /**
     * @var int $instance_id 资产id
     */
    public int $instance_id;
    
    /**
     * @var string $app_id app id
     */
    public string $app_id;
    
    /**
     * @var int $advertiser_id 所属广告主账户ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $link 启动链接
     */
    public string $link;
    
    /**
     * @var string $link_remark 链接备注
     */
    public string $link_remark;
    
    /**
     * @var string $start_page 启动页面
     */
    public string $start_page;
    
    /**
     * @var string $start_param 启动参数
     */
    public string $start_param;
    
    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;
    
    /**
     * @var string $modify_time 最后一次修改时间
     */
    public string $modify_time;
    
}