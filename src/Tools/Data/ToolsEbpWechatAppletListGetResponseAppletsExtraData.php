<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 小程序信息
class ToolsEbpWechatAppletListGetResponseAppletsExtraData extends Data
{

    /**
     * @var string $real_name_uri 实名认证截图，对应上传图片返回的uri
     */
    public string $real_name_uri;

    /**
     * @var string $age_remind_uri 适龄提醒截图
     */
    public string $age_remind_uri;

    /**
     * @var string $anti_addiction_uri 防沉迷截图
     */
    public string $anti_addiction_uri;

    /**
     * @var string $screen_record_uri 游戏内容视频
     */
    public string $screen_record_uri;

    /**
     * @var string $screen_record_vid 游戏内容视频 vid
     */
    public string $screen_record_vid;

    /**
     * @var string $real_name_url 实名认证截图，对应上传图片返回的链接
     */
    public string $real_name_url;

    /**
     * @var string $age_remind_url 适龄提醒截图 链接
     */
    public string $age_remind_url;

    /**
     * @var string $anti_addiction_url 防沉迷截图 链接
     */
    public string $anti_addiction_url;

    /**
     * @var string $screen_record_url 游戏内容视频 链接
     */
    public string $screen_record_url;

    /**
     * @var string $screen_record_vid_url 游戏内容视频 vid 链接
     */
    public string $screen_record_vid_url;

    /**
     * @var string $real_name_toskey 
     */
    public string $real_name_toskey;

    /**
     * @var string $age_remind_toskey 
     */
    public string $age_remind_toskey;

    /**
     * @var string $anti_addiction_toskey 
     */
    public string $anti_addiction_toskey;

    /**
     * @var string $screen_record_toskey 
     */
    public string $screen_record_toskey;

}