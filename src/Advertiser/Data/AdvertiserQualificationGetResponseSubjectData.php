<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// 主体资质，相关字段见下:
class AdvertiserQualificationGetResponseSubjectData extends Data
{

    /**
     * @var int $qualification_id 资质id
     */
    public int $qualification_id;
    
    /**
     * @var string $company_name 公司名称
     */
    public string $company_name;
    
    /**
     * @var string $company_type 公司类型，枚举值:COMPANY 企业、INDIVIDUAL 个人
     */
    public string $company_type;
    
    /**
     * @var string $check_type 对公验证类型，枚举值:COMPANY 企业、GOVERNMENT 政府组织机构/事业单位、HK_MACAO_TAIWAN 港澳台、INDIVIDUAL 个人、OTHERS 其他机构（如民办机构）、OVERSEA 海外、SELF_EMPLOY 个体工商户
     */
    public string $check_type;
    
    /**
     * @var string $qualification_type 资质类型，枚举值:ASSOCIATION_REGISTER_CODE 社会团体法人登记证书编号COMMERCIAL_REGISTER_NUMBER 商业登记证号码COMPANY_CREDIT_CODE 企业营业执照统一社会信用代码COMPANY_REGISTER_CODE 企业营业执照注册号CREDIT_CODE 统一社会信用代码证书编号HK_MACAO_TAIWAN_ID 港澳/台湾居民往来大陆通行证证件号码HK_REGISTER_CODE 香港公司注册证书编号ID 身份证号INDIVIDUAL_CREDIT_CODE 个体工商户营业执照统一社会信用代码INDIVIDUAL_REGISTER_CODE 个体工商户营业执照注册号LAWYER_CERTIFICATE_NUMBER 律师执业证书执业证号LAWYER_PERMIT_CODE 律师事务所执业许可证编号LEGAL_PERSON_CREDIT_CODE 事业单位法人证书统一社会信用代码ORGANIZATION_REGISTER_CODE 组织机构代码证代号OTHER 其他编号OVERSEA_REGISTER_CODE 外国（地区）企业常驻代表机构登记证编号PASSPORT_ID 护照号SCHOOL_PERMIT_CODE 民办学校办学许可证编号SOCIAL_REGISTER_CODE 民办非企业单位登记证书编号
     */
    public string $qualification_type;
    
    /**
     * @var string $qualification_code 资质编号
     */
    public string $qualification_code;
    
    /**
     * @var string $registered_nation_name 注册国家
     */
    public string $registered_nation_name;
    
    /**
     * @var string $registered_province_name 注册省份
     */
    public string $registered_province_name;
    
    /**
     * @var string $registered_city_name 注册城市
     */
    public string $registered_city_name;
    
    /**
     * @var bool $has_effective_date 是否有有效日期
     */
    public bool $has_effective_date;
    
    /**
     * @var string $effective_date 过期时间，格式yyyy-mm-dd
     */
    public string $effective_date;
    
    /**
     * @var string $proprietor_name 法人
     */
    public string $proprietor_name;
    
    /**
     * @var string $address 详细地址
     */
    public string $address;
    
    /**
     * @var string $status 状态，枚举值：STATUS_NOT_SUBMIT 未提交、STATUS_WAIT_CONFIRM 待审核、STATUS_PENDING_CONFIRM 审核中、STATUS_CONFIRM 审核通过、STATUS_CONFIRM_FAIL 审核不通过
     */
    public string $status;
    
    /**
     * @var string $reject_reason 拒绝理由
     */
    public string $reject_reason;
    
    /**
     * @var string $attachment_id 资质图片附件id
     */
    public string $attachment_id;
    
    /**
     * @var string $picture_url 资质图片地址
     */
    public string $picture_url;
    
}