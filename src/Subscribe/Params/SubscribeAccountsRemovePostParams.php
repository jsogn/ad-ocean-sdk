<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Params;

use AdOceanSdk\RequestParams;

class SubscribeAccountsRemovePostParams extends RequestParams
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
     * @var array<int> $advertiser_ids 需要添加的账户id，一次请求最大支持500个账户
     */
    public array $advertiser_ids;

    /**
     * @var string $subscribe_package_type 自定义订阅账户包类型， 可选值:APP APP维度TASK订阅任务维度（默认）
     */
    public string $subscribe_package_type;

    /**
     * @var string $account_type 添加的账户类型，可选值: ADVERTISER 客户（默认）AGENT 代理商旧版巨量引擎工作台 旧版巨量引擎工作台升级版巨量引擎工作台 升级版巨量引擎工作台LOCAL_ADVERTISER 本地推客户
     */
    public string $account_type;

}