<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Data;

use AdOceanSdk\Kernel\Data\Data;

// 投放账户列表
class SubscribeAccountsListGetResponseAdvertisersData extends Data
{

    /**
     * @var int $core_user_id 授权用户ID
     */
    public int $core_user_id;

    /**
     * @var int $advertiser_id 投放账户
     */
    public int $advertiser_id;

    /**
     * @var string $status 推送状态，可选值: OK 推送中PENDING 新增状态UNAUTHORIZED 无权限UNKNOWN 未知
     */
    public string $status;

    /**
     * @var string $reason 未推送原因
     */
    public string $reason;

    /**
     * @var string $created_time 投放账户添加时间
     */
    public string $created_time;

    /**
     * @var string $updated_time 投放账户更新时间
     */
    public string $updated_time;

    /**
     * @var string $source 账户来源，可选值: AUTO_ADD系统自动添加CUSTOM 自定义添加
     */
    public string $source;

    /**
     * @var string $account_type 账户类型，可选值: ADVERTISER 客户AGENT 代理商旧版巨量引擎工作台 旧版巨量引擎工作台升级版巨量引擎工作台 升级版巨量引擎工作台LOCAL_ADVERTISER 本地推客户
     */
    public string $account_type;

}