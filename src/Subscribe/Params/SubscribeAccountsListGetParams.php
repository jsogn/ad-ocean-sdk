<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Params;

use AdOceanSdk\RequestParams;

class SubscribeAccountsListGetParams extends RequestParams
{

    /**
     * @var int $app_id 开放平台调用MAP所使用的APPID
     */
    public int $app_id;

    /**
     * @var int $subscribe_task_id 订阅任务ID注意：当subscribe_package_type=TASK时生效且必填
     */
    public int $subscribe_task_id;

    /**
     * @var int $core_user_id 授权用户ID
     */
    public int $core_user_id;

    /**
     * @var array<int> $advertiser_ids 账号ID
     */
    public array $advertiser_ids;

    /**
     * @var array<string> $statuses 推送状态，可选值: OK 推送中PENDING 新增状态UNAUTHORIZED 无权限UNKNOWN 未知
     */
    public array $statuses;

    /**
     * @var int $cursor 游标，默认值 0
     */
    public int $cursor;

    /**
     * @var int $count 页大小，默认 100， 最大值 500
     */
    public int $count;

    /**
     * @var string $subscribe_package_type 自定义订阅账户包类型，可选值:APP APP维度TASK订阅任务维度，默认
     */
    public string $subscribe_package_type;

    /**
     * @var string $source 账户来源，可选值: AUTO_ADD系统添加CUSTOM 自定义添加
     */
    public string $source;

    /**
     * @var string $account_type 账户类型，可选值: ADVERTISER 客户AGENT 代理商旧版巨量引擎工作台 旧版巨量引擎工作台升级版巨量引擎工作台 升级版巨量引擎工作台LOCAL_ADVERTISER 本地推客户
     */
    public string $account_type;

}