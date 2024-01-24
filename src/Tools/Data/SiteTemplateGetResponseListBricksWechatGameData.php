<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 微信小游戏组件描述
class SiteTemplateGetResponseListBricksWechatGameData extends Data
{

    /**
     * @var int $instance_id 微信小游戏组件ID，当wechat_game不为空时，有返回值。
     */
    public int $instance_id;

    /**
     * @var string $game_path 微信小游戏的路径参数
     */
    public string $game_path;

    /**
     * @var array<string> $items 标签，个数不超过2，字数不超过5个中文字符
     */
    public array $items;

    /**
     * @var string $introduction 简介，长度不超过40个中文字符
     */
    public string $introduction;

    /**
     * @var string $logo logo链接地址
     */
    public string $logo;

}