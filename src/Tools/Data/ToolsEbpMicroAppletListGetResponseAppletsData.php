<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序信息
class ToolsEbpMicroAppletListGetResponseAppletsData extends Data
{

    /**
     * @var int $instance_id 小程序资产id
     */
    public int $instance_id;

    /**
     * @var string $app_id 小程序原始id（tt开头）
     */
    public string $app_id;

    /**
     * @var string $name 小程序名称
     */
    public string $name;

    /**
     * @var int $category 小程序细分类型或道具类目，详见【应用管理标签及类目】
     */
    public int $category;

    /**
     * @var string $audit_status 审核状态，枚举值：AUDIT_ACCEPTED 审核通过AUDITING 审核中AUDIT_REJECTED 审核拒绝
     */
    public string $audit_status;

    /**
     * @var string $reason 审核拒绝原因
     */
    public string $reason;

    /**
     * @var string $icon 小程序icon
     */
    public string $icon;

    /**
     * @var string $remark 小程序备注
     */
    public string $remark;

    /**
     * @var bool $category_limit_flag 
     */
    public bool $category_limit_flag;

    /**
     * @var dict[string] $data 小程序其他字段信息
     */
    public dict[string] $data;

    /**
     * @var bool $is_ebp_asset 是否升级版巨量引擎工作台资产
     */
    public bool $is_ebp_asset;

}