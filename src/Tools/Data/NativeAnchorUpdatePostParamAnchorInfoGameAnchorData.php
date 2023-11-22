<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 游戏锚点，当需要更新的锚点类型为anchor_type=APP_GAME: 应用下载-游戏锚点时必填
class NativeAnchorUpdatePostParamAnchorInfoGameAnchorData extends Data
{

    /**
     * @var string $game_type 推广内容，游戏锚点必填，允许值：
     */
    public string $game_type;
    
    /**
     * @var int $platform_type 游戏下载配置，game_type为GENERAL常规游戏下载时必填
     */
    public int $platform_type;
    
    /**
     * @var string $android_download_url 安卓下载链接，game_type为GENERAL常规游戏下载时必填
     */
    public string $android_download_url;
    
    /**
     * @var string $android_anchor_title 安卓端锚点标题字段，长度1～12
     */
    public string $android_anchor_title;
    
    /**
     * @var string $ios_download_url iOS下载链接，game_type为GENERAL常规游戏下载时必填
     */
    public string $ios_download_url;
    
    /**
     * @var string $ios_anchor_title iOS端锚点标题字段，长度1～12
     */
    public string $ios_anchor_title;
    
    /**
     * @var string $app_open_url App调起链接
     */
    public string $app_open_url;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorHeadImageListData> $head_image_list 顶部头图，推荐尺寸为2：1的横图
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorHeadImageListData::class)]
    public array $head_image_list;
    
    /**
     * @var int $instance_id 微信小游戏ID，游戏锚点且game_type为MICRO_GAME 微信小游戏必填
     */
    public int $instance_id;
    
    /**
     * @var string $path_param 微信小程序路径参数
     */
    public string $path_param;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorIconImagesData> $icon_images 游戏icon，当前锚点类型且game_type为MICRO_GAME微信小游戏必填，比例为1：1，最多一个
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorIconImagesData::class)]
    public array $icon_images;
    
    /**
     * @var array<string> $app_tags 游戏标签列表，每个标签长度1～6，标签个数1～2
     */
    public array $app_tags;
    
    /**
     * @var string $guide_text 引导文案，长度1～15
     */
    public string $guide_text;
    
    /**
     * @var int $anchor_image_mode 游戏图片比例，枚举：
     */
    public int $anchor_image_mode;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorAppImagesData> $app_images 游戏图片，图片个数 3～8
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorAppImagesData::class)]
    public array $app_images;
    
    /**
     * @var string $game_description 游戏简介，长度 1～45
     */
    public string $game_description;
    
    /**
     * @var string $game_charatoristic 游戏特色，长度 1～45
     */
    public string $game_charatoristic;
    
    /**
     * @var string $other_description 其他说明，长度 1～200
     */
    public string $other_description;
    
    /**
     * @var bool $game_bonus 游戏福利，可选择YES启用、NO不启用
     */
    public bool $game_bonus;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorGamePackageListData> $game_package_list 游戏礼包列表，当game_bonus为YES时必填，数量限制0-3
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Tools\Data\NativeAnchorUpdatePostParamAnchorInfoGameAnchorGamePackageListData::class)]
    public array $game_package_list;
    
}