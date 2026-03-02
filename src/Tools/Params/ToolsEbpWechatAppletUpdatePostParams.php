<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpWechatAppletUpdatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，可选值:
     */
    public string $account_type;

    /**
     * @var int $instance_id 资产ID
     */
    public int $instance_id;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletUpdatePostParamIconData $icon 小程序icon图片的url，尺寸60*60px,大小不超2MB
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletUpdatePostParamIconData $icon;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletUpdatePostParamHeadData $head 顶部头图的url，大小不超过5MB的图片，推荐尺寸2:1
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletUpdatePostParamHeadData $head;

    /**
     * @var array<string> $label 小程序标签，每个标签长度不超过6，最多支持6个标签
     */
    public array $label;

    /**
     * @var string $guide_copy 引导文案，最大长度不超过14
     */
    public string $guide_copy;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpWechatAppletUpdatePostParamMaterialData> $material 小程序横图/竖图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
     */
    public array $material;

    /**
     * @var string $introduction 小程序简介，最大长度不超过50
     */
    public string $introduction;

    /**
     * @var string $tag_info 细分类型
     */
    public string $tag_info;

    /**
     * @var string $remark 资产备注信息，最大长度不超过15
     */
    public string $remark;

    /**
     * @var string $path 小游戏path可编辑，小程序不可以编辑
     */
    public string $path;

    /**
     * @var object $data 主成分字段存储
     */
    public object $data;

}