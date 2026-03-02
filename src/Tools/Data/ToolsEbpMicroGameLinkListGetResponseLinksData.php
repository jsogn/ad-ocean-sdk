<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 链接详情
class ToolsEbpMicroGameLinkListGetResponseLinksData extends Data
{

    /**
     * @var int $instance_id 小游戏资产id
     */
    public int $instance_id;

    /**
     * @var string $app_id 小游戏原始id（tt开头的id）
     */
    public string $app_id;

    /**
     * @var int $adv_id 
     */
    public int $adv_id;

    /**
     * @var int $clue_account_id 
     */
    public int $clue_account_id;

    /**
     * @var string $start_page 启动页面
     */
    public string $start_page;

    /**
     * @var string $remark 链接备注
     */
    public string $remark;

    /**
     * @var string $link 以 sslocal://microgame 开头。生效优先级大于启动参数
     */
    public string $link;

    /**
     * @var string $icon 字节小游戏icon
     */
    public string $icon;

    /**
     * @var int $create_time 小游戏创建时间
     */
    public int $create_time;

    /**
     * @var int $modify_time 小游戏修改时间
     */
    public int $modify_time;

    /**
     * @var string $thumbnail 
     */
    public string $thumbnail;

    /**
     * @var int $app_type 
     */
    public int $app_type;

    /**
     * @var int $audit_status 小游戏审核状态
     */
    public int $audit_status;

    /**
     * @var int $site_id 站点ID
     */
    public int $site_id;

    /**
     * @var string $start_params 启动参数，形如：name=zhangsan&age=25。不得以问号、连接符等特殊字符开头，请确保各参数间仅使用一个连接符
     */
    public string $start_params;

    /**
     * @var int $link_id 链接id
     */
    public int $link_id;

    /**
     * @var int $account_id 归属升级版巨量引擎工作台组织id
     */
    public int $account_id;

    /**
     * @var int $account_type 枚举：EBP
     */
    public int $account_type;

    /**
     * @var bool $is_ebp_asset 是否为EBP资产
     */
    public bool $is_ebp_asset;

}