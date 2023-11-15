<?php

namespace AdOceanSdk\Account\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

class AdvertiserInfoGetData extends Data
{
    /**
     * @var int 广告主ID
     */
    public int $id;

    /**
     * @var string 账户名
     */
    public string $name;

    /**
     * @var string 角色
     * 详见【附录-广告主角色】
     */
    public string $role;

    /**
     * @var string 状态
     * 详见【附录-广告主状态】
     */
    public string $status;

    /**
     * @var string 备注
     */
    public string $note;

    /**
     * @var string 地址
     */
    public string $address;

    /**
     * @var string 执照预览地址(链接默认1小时内有效)
     */
    public string $license_url;

    /**
     * @var string 执照编号
     */
    public string $license_no;

    /**
     * @var string 执照省份
     */
    public string $license_province;

    /**
     * @var string 执照城市
     */
    public string $license_city;

    /**
     * @var string 公司名
     */
    public string $company;

    /**
     * @var string 经营类别
     */
    public string $brand;

    /**
     * @var string 运营区域
     */
    public string $promotion_area;

    /**
     * @var string 运营省份
     */
    public string $promotion_center_province;

    /**
     * @var string 运营城市
     */
    public string $promotion_center_city;

    /**
     * @var string 一级行业名称（新版）
     */
    public string $first_industry_name;

    /**
     * @var string 二级行业名称（新版）
     */
    public string $second_industry_name;

    /**
     * @var string 审核拒绝原因
     */
    public string $reason;

    /**
     * @var string 创建时间
     */
    public string $create_time;
}