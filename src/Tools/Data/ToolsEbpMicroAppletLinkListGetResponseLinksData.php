<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 字节小程序链接详情
class ToolsEbpMicroAppletLinkListGetResponseLinksData extends Data
{

    /**
     * @var int $instance_id 资产ID
     */
    public int $instance_id;

    /**
     * @var string $app_id 小程序原始ID
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
     * @var string $link 启动链接
     */
    public string $link;

    /**
     * @var string $icon 小程序icon
     */
    public string $icon;

    /**
     * @var int $create_time 资产创建时间
     */
    public int $create_time;

    /**
     * @var int $modify_time 资产最后一次修改时间
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
     * @var int $audit_status 审核状态
     */
    public int $audit_status;

    /**
     * @var int $site_id 
     */
    public int $site_id;

    /**
     * @var string $start_params 启动参数
     */
    public string $start_params;

    /**
     * @var int $link_id 链接id
     */
    public int $link_id;

    /**
     * @var int $account_id 归属账户id
     */
    public int $account_id;

    /**
     * @var int $account_type 归属账户类型，EBP
     */
    public int $account_type;

    /**
     * @var bool $is_ebp_asset 是否为升级版组织资产
     */
    public bool $is_ebp_asset;

}