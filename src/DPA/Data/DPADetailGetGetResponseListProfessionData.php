<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 额外信息
class DPADetailGetGetResponseListProfessionData extends Data
{

    /**
     * @var string $platform 平台信息，枚举值：淘宝天猫京东其他
     */
    public string $platform;
    
    /**
     * @var string $chapter 章节信息，结构为一个json字符串，章节名称name长度小于100；章节详细内容content长度小于5000示例："[{"id":"0","name":"莫欺少年穷","content":"莫欺少年穷"},{"id":"1","name":"莫欺中年穷","content":"莫欺中年穷"}]"
     */
    public string $chapter;
    
    /**
     * @var string $novel_length 书籍长短篇，枚举值：长篇书短篇书
     */
    public string $novel_length;
    
    /**
     * @var string $novel_gender 书籍男女频，枚举值：男频书女频书其他
     */
    public string $novel_gender;
    
    /**
     * @var string $novel_author 书籍作者
     */
    public string $novel_author;
    
    /**
     * @var string $novel_star 书籍收藏数
     */
    public string $novel_star;
    
    /**
     * @var string $novel_type 书籍付费/免费信息，枚举值：免费小说付费小说
     */
    public string $novel_type;
    
    /**
     * @var string $start_pay_chapter 起始付费章节
     */
    public string $start_pay_chapter;
    
    /**
     * @var string $min_pay_money 最低付费金额
     */
    public string $min_pay_money;
    
    /**
     * @var string $acc_pay_people 累计付费人数
     */
    public string $acc_pay_people;
    
    /**
     * @var string $acc_pay_money 累计付费金额
     */
    public string $acc_pay_money;
    
    /**
     * @var string $name 短剧名
     */
    public string $name;
    
    /**
     * @var string $copyright_owner 版权方
     */
    public string $copyright_owner;
    
    /**
     * @var string $playlet_gender 短剧男女频
     */
    public string $playlet_gender;
    
    /**
     * @var int $playlet_num 剧类集数
     */
    public int $playlet_num;
    
    /**
     * @var int $playlet_duration 单集聚集时长（分钟）
     */
    public int $playlet_duration;
    
    /**
     * @var int $start_pay_playlet 起始付费集数
     */
    public int $start_pay_playlet;
    
    /**
     * @var int $price 单集价格（不含赠送）
     */
    public int $price;
    
    /**
     * @var string $year_of_vip 是否有年度会员
     */
    public string $year_of_vip;
    
    /**
     * @var string $half_year_of_vip 是否有半年会员
     */
    public string $half_year_of_vip;
    
    /**
     * @var int $max_charge 最高充值档位（元）
     */
    public int $max_charge;
    
    /**
     * @var int $min_charge 最低充值档位（元）
     */
    public int $min_charge;
    
    /**
     * @var int $recommended_charge 推荐充值档位（元）
     */
    public int $recommended_charge;
    
}