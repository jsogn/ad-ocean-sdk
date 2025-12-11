<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 游戏礼包列表，当game_bonus为TRUE 时必填，数量限制0-3
class NativeAnchorCreatePostParamAnchorInfoGameAnchorGamePackageListData extends Data
{

    /**
     * @var string $game_package_name 游戏礼包名称，字符限制0～14
     */
    public string $game_package_name;
    
    /**
     * @var string $android_package_code 安卓礼包码，字符限制0～20
     */
    public string $android_package_code;
    
    /**
     * @var string $ios_package_code ios礼包码，字符限制0～20
     */
    public string $ios_package_code;
    
    /**
     * @var array<\AdOceanSdk\Tools\Data\NativeAnchorCreatePostParamAnchorInfoGameAnchorGamePackageListGiftData> $gift 礼包内的礼品配置，数量限制0～8
     */
    public array $gift;
    
    /**
     * @var string $gift_start_date 礼包使用开始期限，格式 yyyy.MM.dd
     */
    public string $gift_start_date;
    
    /**
     * @var string $gift_end_date 礼包使用结束期限，格式 yyyy.MM.dd
     */
    public string $gift_end_date;
    
    /**
     * @var string $gift_regulation 礼包使用规则，字符限制0～30
     */
    public string $gift_regulation;
    
}