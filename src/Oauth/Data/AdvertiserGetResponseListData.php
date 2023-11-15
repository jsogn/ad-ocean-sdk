<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// 账号列表
class AdvertiserGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 账号id
     */
    public int $advertiser_id;
    
    /**
     * @var string $account_string_id 账号id（字符串型）
     */
    public string $account_string_id;
    
    /**
     * @var string $advertiser_name 账号名称
     */
    public string $advertiser_name;
    
    /**
     * @var int $advertiser_role 旧版账号角色，1-普通广告主，2-纵横组织账户，3-一级代理商，4-二级代理商，6-星图账号，10-抖音号（用于Dou+接口调用）
     */
    public int $advertiser_role;
    
    /**
     * @var bool $is_valid 授权有效性，允许值：true/false；false表示对应的user在客户中心/一站式平台代理商平台变更了对此账号的权限,需要到对应平台进行调整过来；
     */
    public bool $is_valid;
    
    /**
     * @var string $account_role 新版账号角色，见【枚举值-账户角色】
     */
    public string $account_role;
    
    /**
     * @var array<\AdOceanSdk\Oauth\Data\AdvertiserGetResponseListCompanyListData> $company_list 代理商账户下勾选账户，但授权时选择的是代理商类型账户时，该字段才有意义company_list为空时，代表当前代理商账户下所有adv均可访问；不为空时，代表仅能访问该部分客户id下的adv
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Oauth\Data\AdvertiserGetResponseListCompanyListData::class)]
    public array $company_list;
    
}