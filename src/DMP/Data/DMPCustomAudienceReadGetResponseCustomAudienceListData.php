<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Data;

use AdOceanSdk\Kernel\Data\Data;

// 人群包列表数据
class DMPCustomAudienceReadGetResponseCustomAudienceListData extends Data
{

    /**
     * @var int $custom_audience_id 人群包ID
     */
    public int $custom_audience_id;
    
    /**
     * @var int $isdel 人群包是否被删除,枚举值："1"：已删除，"0"：未删除
     */
    public int $isdel;
    
    /**
     * @var string $data_source_id 数据源ID
     */
    public string $data_source_id;
    
    /**
     * @var string $name 人群包名称
     */
    public string $name;
    
    /**
     * @var string $source 人群包来源， 详见【附录-DMP相关-人群包来源】
     */
    public string $source;
    
    /**
     * @var int $status 人群包状态，详见【附录-DMP相关-人群包状态】
     */
    public int $status;
    
    /**
     * @var int $cover_num 人群包覆盖人群数目，基于"upload_num"：上传数据源包含的人群数目与uid对应后，再与头条系产品MAU交集后的数量（存在一个设备号/手机号对应多个uid的情况）实际数量可能多于/少于"upload_num"：上传数据源包含的人群数目
     */
    public int $cover_num;
    
    /**
     * @var int $upload_num 上传数据源包含的人群数目
     */
    public int $upload_num;
    
    /**
     * @var string $tag 人群包标签
     */
    public string $tag;
    
    /**
     * @var int $push_status 推送状态，详见【附录-DMP相关-DMP推送状态】
     */
    public int $push_status;
    
    /**
     * @var string $delivery_status 人群包可投放状态，只有当状态为CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE时才可进行投放使用可选值：CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE：可投放，人群包发布完成且推送完成CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH：不可投放，人群包发布完成，但未推送，需要进行推送后再使用CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH：不可投放，群包未发布但已推送，需要进行发布后再使用CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE：不可投放，未发布完成且未推送
     */
    public string $delivery_status;
    
    /**
     * @var string $create_time 人群包创建时间
     */
    public string $create_time;
    
    /**
     * @var string $modify_time 人群包修改时间
     */
    public string $modify_time;
    
    /**
     * @var string $third_party_info 是否为三方包，均返回“非三方包”
     */
    public string $third_party_info;
    
    /**
     * @var int $exist_pull_off_tag 人群包是否包含下线标签，0：不包含，1：包含
     */
    public int $exist_pull_off_tag;
    
}