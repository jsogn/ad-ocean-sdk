<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsEbpWechatAppletCreatePostParams extends RequestParams
{

    /**
     * @var int $account_id 账户ID
     */
    public int $account_id;

    /**
     * @var string $account_type 账户类型，允许值：
     */
    public string $account_type;

    /**
     * @var string $name 小程序名称
     */
    public string $name;

    /**
     * @var string $username 小程序原始id（gh开头）
     */
    public string $username;

    /**
     * @var string $path 小程序路径
     */
    public string $path;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamExtraData $extra 
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamExtraData $extra;

    /**
     * @var bool $unite_flag 是否是归一化资产
     */
    public bool $unite_flag;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamIconData $icon 小程序icon图片的url，尺寸60*60px,大小不超2MB
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamIconData $icon;

    /**
     * @var \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamHeadData $head 顶部头图的url，大小不超过5MB的图片，推荐尺寸2:1
     */
    public \AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamHeadData $head;

    /**
     * @var array<string> $label 小程序标签，每个标签长度不超过6，最多支持6个标签
     */
    public array $label;

    /**
     * @var string $guide_copy 引导文案，最大长度不超过14
     */
    public string $guide_copy;

    /**
     * @var array<\AdOceanSdk\Tools\Data\ToolsEbpWechatAppletCreatePostParamMaterialData> $material 素材图片小程序横图/竖图的url地址，要求尺寸必须为3:5，否则报错。仅支持竖图和横图择其一类型上传，若同时上传两种类型的图片则报错小程序横图或竖图上传最少3张，最多8张，大小不超过5MB图片格式要求jpeg、png或gif
     */
    public array $material;

    /**
     * @var string $introduction 小程序简介，最大长度不超过50
     */
    public string $introduction;

    /**
     * @var string $tag_info 细分类型,填写细分类型的末级分类ID category_id，分类及ID详见【应用管理标签及类目】
     */
    public string $tag_info;

    /**
     * @var string $remark 小程序 备注信息
     */
    public string $remark;

    /**
     * @var array $data 小程序其他信息，参考下方小程序其他信息传参说明
     */
    public array $data;

}