<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 软件著作权
class ToolsEbpWechatAppletListGetResponseAppletsQualificationsData extends Data
{

    /**
     * @var int $qualification_id 
     */
    public int $qualification_id;

    /**
     * @var int $qualification_type 
     */
    public int $qualification_type;

    /**
     * @var string $name 软件名称
     */
    public string $name;

    /**
     * @var string $abbr 软件简称
     */
    public string $abbr;

    /**
     * @var string $copyright_owner 著作权人
     */
    public string $copyright_owner;

    /**
     * @var string $regist_no 登记号
     */
    public string $regist_no;

    /**
     * @var array<string> $copyright_image_url 著作书图片
     */
    public array $copyright_image_url;

    /**
     * @var array<string> $authorized_image_url 授权图片
     */
    public array $authorized_image_url;

    /**
     * @var int $own_type 资质拥有类型
     */
    public int $own_type;

    /**
     * @var string $qualification_show_name 资质类型，展示名称
     */
    public string $qualification_show_name;

    /**
     * @var array<string> $image_list 
     */
    public array $image_list;

    /**
     * @var int $version 
     */
    public int $version;

    /**
     * @var int $status 状态
     */
    public int $status;

    /**
     * @var int $app_qualification_type 安卓应用返回枚举类型
     */
    public int $app_qualification_type;

    /**
     * @var int $qualification_id_type 
     */
    public int $qualification_id_type;

}