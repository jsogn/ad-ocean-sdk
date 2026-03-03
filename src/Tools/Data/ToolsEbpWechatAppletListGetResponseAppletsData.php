<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序信息
class ToolsEbpWechatAppletListGetResponseAppletsData extends Data
{

    /**
     * @var string $name 小程序名称
     */
    public string $name;

    /**
     * @var string $username 小程序原始ID（gh开头）
     */
    public string $username;

    /**
     * @var int $instance_id 小程序资产ID
     */
    public int $instance_id;

    /**
     * @var string $path 小程序路径
     */
    public string $path;

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，枚举值：
     */
    public string $account_type;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsExtraData $extra 小程序信息
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsExtraData $extra;

    /**
     * @var string $audit_status 审核状态，枚举值：AUDIT_ACCEPTED 审核通过AUDITING 审核中AUDIT_REJECTED 审核不通过
     */
    public string $audit_status;

    /**
     * @var string $reason 审核拒绝原因
     */
    public string $reason;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsQualificationsData> $qualifications 软件著作权
     */
    public array $qualifications;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsIconData $icon icon
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsIconData $icon;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsHeadData|null $head 头图
     */
    public ?\AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsHeadData $head;

    /**
     * @var array<string> $label 标签 最多6个
     */
    public array $label;

    /**
     * @var string $guide_copy 引导文案
     */
    public string $guide_copy;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpWechatAppletListGetResponseAppletsMaterialData> $material 素材图片
     */
    public array $material;

    /**
     * @var string $introduction 简介
     */
    public string $introduction;

    /**
     * @var string $tag_info 细分类型或道具类目，详见【应用管理标签及类目】
     */
    public string $tag_info;

    /**
     * @var string $remark 小程序 备注信息
     */
    public string $remark;

    /**
     * @var array $data 小程序其他信息
     */
    public array $data;

    /**
     * @var bool $is_ebp_asset 是否为升级版巨量引擎工作台资产
     */
    public bool $is_ebp_asset;

}