<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 线索列表
class ToolsClueGetResponseListData extends Data
{

    /**
     * @var string $clue_id 线索ID
     */
    public string $clue_id;
    
    /**
     * @var string $advertiser_id 广告主ID
     */
    public string $advertiser_id;
    
    /**
     * @var string $advertiser_name 广告主名
     */
    public string $advertiser_name;
    
    /**
     * @var string $ad_id 计划ID  (投放1.0) 注意：投放2.0为空
     */
    public string $ad_id;
    
    /**
     * @var string $ad_name 计划名(投放1.0) 注意：投放2.0为空
     */
    public string $ad_name;
    
    /**
     * @var string $creative_id 广告创意id(投放1.0) 注意：投放2.0为空
     */
    public string $creative_id;
    
    /**
     * @var string $promotion_name 升级版广告名称(投放2.0)注意：投放1.0为空
     */
    public string $promotion_name;
    
    /**
     * @var int $promotion_id 升级版广告ID(投放2.0)注意：投放1.0为空注意：体验版广告信息与计划/创意信息互斥，不会同时返回
     */
    public int $promotion_id;
    
    /**
     * @var string $mid_info 升级版素材组(投放2.0)
     */
    public string $mid_info;
    
    /**
     * @var string $site_id 站点ID
     */
    public string $site_id;
    
    /**
     * @var string $site_name 站点名称
     */
    public string $site_name;
    
    /**
     * @var string $intention_estimation 线索意向（不再返回该字段）。拉取到线索后，intention_estimation的获取会有约 10 分钟延迟；建议 10 分钟后重新拉取并和该条线索进行匹配
     */
    public string $intention_estimation;
    
    /**
     * @var string $external_url 落地页 url
     */
    public string $external_url;
    
    /**
     * @var int $clue_type 组件类型，允许值：0: 表单提交；1: 在线咨询;2: 智能电话;3: 网页回呼;4: 卡券;5：抽奖
     */
    public int $clue_type;
    
    /**
     * @var string $module_name 组件名字
     */
    public string $module_name;
    
    /**
     * @var string $module_id 组件ID
     */
    public string $module_id;
    
    /**
     * @var string $create_time 线索创建时间，如：2020-04-29
     */
    public string $create_time;
    
    /**
     * @var string $create_time_detail 线索创建时间，如：2020-04-29 00:00:00
     */
    public string $create_time_detail;
    
    /**
     * @var string $date 日期
     */
    public string $date;
    
    /**
     * @var int $clue_source 线索来源，目前几种线索来源分别是，允许值：0: 外部流量；1: 正常投放;2: 外部导入;3: 异常提交;4: 广告预览;5: 抖音私信;6: 鲁班线索
     */
    public int $clue_source;
    
    /**
     * @var string $name 姓名
     */
    public string $name;
    
    /**
     * @var string $telephone 电话
     */
    public string $telephone;
    
    /**
     * @var int $gender 性别允许值：0：未知；1：男 ；2：女
     */
    public int $gender;
    
    /**
     * @var int $age 年龄
     */
    public int $age;
    
    /**
     * @var string $email 邮箱
     */
    public string $email;
    
    /**
     * @var string $weixin 微信
     */
    public string $weixin;
    
    /**
     * @var string $qq QQ
     */
    public string $qq;
    
    /**
     * @var string $province_name 省份
     */
    public string $province_name;
    
    /**
     * @var string $city_name 城市
     */
    public string $city_name;
    
    /**
     * @var string $address 详细地址
     */
    public string $address;
    
    /**
     * @var string $location 用户地址信息
     */
    public string $location;
    
    /**
     * @var string $remark 用户备注留言
     */
    public string $remark;
    
    /**
     * @var object $remark_dict 广告主自定义的其它字段信息，可自定义获取例：若创建表单时自定义了"test_case"字段的设置，则产生的remark_dict线索为："test_case": "xxx"
     */
    public object $remark_dict;
    
    /**
     * @var string $form_remark 广告主表单自定义字段，无业务逻辑，仅作表单标志
     */
    public string $form_remark;
    
    /**
     * @var string $app_name 流量来源，比如「今日头条 」、「抖音」 拉取到线索后，app_name 的获取会有约 10 分钟延迟；建议 10 分钟后重新拉取并和该条线索进行匹配。
     */
    public string $app_name;
    
    /**
     * @var string $convert_status 转化状态，允许值：数据获取中、无、合法转化、附加转化、广告预览、其他转化、外部流量;
     */
    public string $convert_status;
    
    /**
     * @var string $req_id 当前线索对应广告的请求id
     */
    public string $req_id;
    
    /**
     * @var int $clue_state 线索状态值枚举值：1新线索、2有意向、3转商机、4无效、5已加微信、7待再次沟通
     */
    public int $clue_state;
    
    /**
     * @var string $clue_state_name 线索状态名称，“clue_state”对应的名称
     */
    public string $clue_state_name;
    
    /**
     * @var string $clue_owner_name 所属人姓名
     */
    public string $clue_owner_name;
    
    /**
     * @var string $follow_state_name 线索通话状态名称包含值：未联系、未接通、已接通、有效沟通
     */
    public string $follow_state_name;
    
    /**
     * @var string $country_name 所在城市中的【区】字段
     */
    public string $country_name;
    
    /**
     * @var array<string> $system_tags 线索被打上的系统标签，是一个标签项的数组
     */
    public array $system_tags;
    
    /**
     * @var array<string> $tags 线索被打上的人工标签，是一个标签项的数组，包括自定义标签和行业标签
     */
    public array $tags;
    
    /**
     * @var int $allocation_status 分配状态值枚举值：0待分配、1已分配
     */
    public int $allocation_status;
    
    /**
     * @var string $ext_info 线索扩展信息，json string 类型，保存线索非通用字段
     */
    public string $ext_info;
    
    /**
     * @var \AdOceanSdk\Tools\Data\ToolsClueGetResponseListStoreData $store 门店信息
     */
    public \AdOceanSdk\Tools\Data\ToolsClueGetResponseListStoreData $store;
    
}