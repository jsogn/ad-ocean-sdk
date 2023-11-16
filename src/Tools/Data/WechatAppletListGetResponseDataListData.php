<?php

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

class WechatAppletListGetResponseDataListData extends Data
{
    /**
     * @var int $advertiser_id 所属广告主账户ID
     */
    public int $advertiser_id;

    /**
     * @var string $name 小程序名称
     */
    public string $name;

    /**
     * @var string $user_name 小程序原始 ID
     */
    public string $user_name;

    /**
     * @var int $instance_id 小程序资产ID
     */
    public int $instance_id;

    /**
     * @var string $path 小程序路径
     */
    public string $path;

    /**
     * @var string $remark_message 资产备注信息,最大长度不超过15
     */
    public string $remark_message;

    /**
     * @var string $icon_image_url 小程序icon图片的url
     */
    public string $icon_image_url;

    /**
     * @var string $header_image_url 顶部头图的url
     */
    public string $header_image_url;

    /**
     * @var string[] $labels 小程序标签
     */
    public array $labels;

    /**
     * @var string $guide_text 引导文案
     */
    public string $guide_text;

    /**
     * @var string[] $images_vertical_url 小程序竖图的url
     */
    public array $images_vertical_url;

    /**
     * @var string[] $images_horizontal_url 小程序横图的url
     */
    public array $images_horizontal_url;

    /**
     * @var string $introduction 小程序简介
     */
    public string $introduction;

    /**
     * @var string $audit_status 审核状态
     */
    public string $audit_status;

    /**
     * @var string $reason 审核拒绝原因
     */
    public string $reason;

    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;

    /**
     * @var string $modify_time 修改时间
     */
    public string $modify_time;
}