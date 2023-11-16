<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserInfoGetResponseData extends Data
{

    /**
     * @var int $id 广告主ID
     */
    public int $id;
    
    /**
     * @var string $name 账户名
     */
    public string $name;
    
    /**
     * @var string $role 角色, 详见【附录-广告主角色】
     */
    public string $role;
    
    /**
     * @var string $status 状态,详见【附录-广告主状态】
     */
    public string $status;
    
    /**
     * @var string $note 备注
     */
    public string $note;
    
    /**
     * @var string $address 地址
     */
    public string $address;
    
    /**
     * @var string $license_url 执照预览地址(链接默认1小时内有效)
     */
    public string $license_url;
    
    /**
     * @var string $license_no 执照编号
     */
    public string $license_no;
    
    /**
     * @var string $license_province 执照省份
     */
    public string $license_province;
    
    /**
     * @var string $license_city 执照城市
     */
    public string $license_city;
    
    /**
     * @var string $company 公司名
     */
    public string $company;
    
    /**
     * @var string $brand 经营类别
     */
    public string $brand;
    
    /**
     * @var string $promotion_area 运营区域
     */
    public string $promotion_area;
    
    /**
     * @var string $promotion_center_province 运营省份
     */
    public string $promotion_center_province;
    
    /**
     * @var string $promotion_center_city 运营城市
     */
    public string $promotion_center_city;
    
    /**
     * @var string $first_industry_name 一级行业名称（新版）
     */
    public string $first_industry_name;
    
    /**
     * @var string $second_industry_name 二级行业名称（新版）
     */
    public string $second_industry_name;
    
    /**
     * @var string $reason 审核拒绝原因
     */
    public string $reason;
    
    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;
    
}