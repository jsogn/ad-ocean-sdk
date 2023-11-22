<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账户列表
class CustomerCenterAdvertiserListGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主id（一个对象只会返回企业号和广告主其中一种）
     */
    public int $advertiser_id;
    
    /**
     * @var string $advertiser_name 广告主名称（一个对象只会返回企业号和广告主其中一种）
     */
    public string $advertiser_name;
    
    /**
     * @var string $advertiser_type 广告主类型枚举值：DOU+DOU+类广告主账号、NORMAL普通广告主帐号DOU+类广告主账号不支持任何调用接口操作
     */
    public string $advertiser_type;
    
    /**
     * @var string $e_douyin_id 企业号id（一个对象只会返回企业号和广告主其中一种）
     */
    public string $e_douyin_id;
    
    /**
     * @var string $e_douyin_name 企业号名称（一个对象只会返回企业号和广告主其中一种）
     */
    public string $e_douyin_name;
    
}