<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Data;

use AdOceanSdk\Kernel\Data\Data;

// 数据列表
class ReportAdvertiserGetResponseListData extends Data
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var string $stat_datetime 数据起始时间，分组条件包含 STAT_GROUP_BY_FIELD_STAT_TIME 时返回，格式为：yyyy-MM-dd HH:mm:ss
     */
    public string $stat_datetime;
    
    /**
     * @var string $inventory 投放广告位，分组条件包含STAT_GROUP_BY_INVENTORY时返回，具体可查看【附录-首选投放位置】
     */
    public string $inventory;
    
    /**
     * @var string $creative_material_mode 创意类型，分组条件包含STAT_GROUP_BY_CREATIVE_MATERIAL_MODE时返回，允许值：STATIC_ASSEMBLE（程序化创意）、INTERVENE（自定义创意）
     */
    public string $creative_material_mode;
    
    /**
     * @var string $landing_type 推广目的类型，分组条件包含STAT_GROUP_BY_LANDING_TYPE时返回，具体可查看【附录-首选投放位置】
     */
    public string $landing_type;
    
    /**
     * @var string $pricing 出价类型，分组条件包含STAT_GROUP_BY_PRICING时返回，具体可查看【附录-首选投放位置】
     */
    public string $pricing;
    
    /**
     * @var string $image_mode 素材类型，分组条件STAT_GROUP_BY_IMAGE_MODE返回，具体可查看【附录-首选投放位置】
     */
    public string $image_mode;
    
    /**
     * @var string $province_name 省份。如果分组条件中包括 STAT_GROUP_BY_PROVINCE_NAME 时返回
     */
    public string $province_name;
    
    /**
     * @var float $ 激活后四日付费金额
     */
    public float $;
    
    /**
     * @var string $gender 性别。如果分组条件中包括 STAT_GROUP_BY_GENDER 时返回
     */
    public string $gender;
    
    /**
     * @var string $age 年龄。如果分组条件中包括 STAT_GROUP_BY_AGE 时返回
     */
    public string $age;
    
    /**
     * @var string $platform 平台。如果分组条件中包括 STAT_GROUP_BY_PLATFORM 时返回
     */
    public string $platform;
    
    /**
     * @var string $ac 网络类型。如果分组条件中包括 STAT_GROUP_BY_AC 时返回
     */
    public string $ac;
    
    /**
     * @var float $cost 展现数据-总花费表示广告在投放期内的预估花费金额,当天数据可能会有波动，次日稳定
     */
    public float $cost;
    
    /**
     * @var int $show 展现数据-展示数广告展示给用户的次数。计算方式：经平台判定有效且被计费的展示次数
     */
    public int $show;
    
    /**
     * @var float $avg_show_cost 展现数据-平均千次展现费用广告平均每一千次展现所付出的费用，计算公式是：总花费/展示数*1000
     */
    public float $avg_show_cost;
    
    /**
     * @var int $click 展现数据-点击数当头条用户点击广告素材时，触发点击事件，该事件被认为是一次有效的广告点击
     */
    public int $click;
    
    /**
     * @var float $avg_click_cost 展现数据-平均点击单价广告主为每次点击付出的费用成本，计算公式是：总花费/点击数
     */
    public float $avg_click_cost;
    
    /**
     * @var float $ctr 展现数据-点击率广告被点击的次数占展示次数的百分比。计算方法：点击数/展示数*100%
     */
    public float $ctr;
    
    /**
     * @var float $convert_cost 转化数据-转化成本广告主为每个转化所付出的平均成本，计算方式：总花费/转化数。当天数据可能会有波动
     */
    public float $convert_cost;
    
    /**
     * @var float $convert_rate 转化数据-转化率广告被用户转化的次数占点击次数的百分比。计算方式：转化数/点击数*100%
     */
    public float $convert_rate;
    
    /**
     * @var int $deep_convert 转化数据-深度转化数将深度转化数记录在转化事件发生的时间上。建议广告主考核深度转化成本时参考“深度转化数（计费时间）”例如您的广告在早上8点进行了展示和点击，用户晚上19点发生了激活行为，我们会把激活数披露在晚上19点
     */
    public int $deep_convert;
    
    /**
     * @var float $deep_convert_cost 转化数据-深度转化成本广告主为每个深度转化所付出的平均成本，计算方法：总花费/深度转化数。当天数据可能会有波动，次日早8点后稳定
     */
    public float $deep_convert_cost;
    
    /**
     * @var float $deep_convert_rate 转化数据-深度转化率广告被用户进行深度转化的次数占转化次数的百分比。计算方式：深度转化数/转化数*100%
     */
    public float $deep_convert_rate;
    
    /**
     * @var float $attribution_convert_cost 转化数据（计费时间）-转化成本（计费时间）转化成本(计费时间) = 消耗 / 转化数(计费时间)。例如：广告在8月20日展示给用户，此时广告花费10元，用户点击广告后，于8月23日产生2笔购买，则8月20日的转化成本（计费时间） = 5元（即10元除以2笔）。成本考核和系统赔付以该指标为准，暂不支持查看当日数据
     */
    public float $attribution_convert_cost;
    
    /**
     * @var int $attribution_deep_convert 转化数据（计费时间）-深度转化数（计费时间）在转化行为发生（或回传）后，将转化行为回记到过去7天内的扣费（消耗产生）时间上。 例如：广告在8月20日展示给用户，此时广告花费10元，用户点击广告后于8月23日产生1笔购买，则8月23日这笔购买将会展示在8月20日。暂不支持查看当日数据
     */
    public int $attribution_deep_convert;
    
    /**
     * @var float $attribution_deep_convert_cost 转化数据（计费时间）-深度转化成本（计费时间）是一个准确的深度转化成本评估指标。计算方式：消耗 / 深度转化数(计费时间)。例如：广告在8月20日展示给用户，此时广告花费10元，用户点击广告后，于 8 月 23 日产生2笔购买，则8月20日的深度转化成本（计费时间） = 5元（即10元除以2笔）。成本考核和系统赔付以该指标为准，暂不支持查看当日数据
     */
    public float $attribution_deep_convert_cost;
    
    /**
     * @var int $download_start 应用下载广告数据-安卓下载开始数用户在落地页中开始安装包下载进程的次数，仅安卓下载可以监测到该行为
     */
    public int $download_start;
    
    /**
     * @var float $download_start_cost 应用下载广告数据-安卓下载开始成本计算方法：总花费/安卓下载开始数
     */
    public float $download_start_cost;
    
    /**
     * @var float $download_start_rate 应用下载广告数据-安卓下载开始率计算方法：安卓下载开始数/点击数
     */
    public float $download_start_rate;
    
    /**
     * @var float $download_finish_cost 应用下载广告数据-安卓下载完成成本计算方式：总花费/安卓下载完成数
     */
    public float $download_finish_cost;
    
    /**
     * @var float $download_finish_rate 应用下载广告数据-安卓下载完成率计算方式：安卓下载完成数/安卓下载开始数
     */
    public float $download_finish_rate;
    
    /**
     * @var int $click_install 应用下载广告数据-点击安装数用户点击安装完成的次数
     */
    public int $click_install;
    
    /**
     * @var int $install_finish 应用下载广告数据-安卓安装完成数用户在落地页中将安装包安装完成的次数，仅安卓下载可以监测到该行为
     */
    public int $install_finish;
    
    /**
     * @var float $install_finish_cost 应用下载广告数据-安卓安装完成成本计算方式：总花费/安卓安装完成数
     */
    public float $install_finish_cost;
    
    /**
     * @var float $install_finish_rate 应用下载广告数据-安卓安装完成率计算方式：安卓安装完成数/安卓下载完成数
     */
    public float $install_finish_rate;
    
    /**
     * @var float $active_rate 应用下载广告数据-激活率计算方式：激活数/点击数*100%
     */
    public float $active_rate;
    
    /**
     * @var int $register 应用下载广告数据-注册数如果您对接了API，注册数是您认可且回传成功的的注册数。如果您对接了SDK，则注册数是用户实现注册行为的次数
     */
    public int $register;
    
    /**
     * @var float $active_register_cost 应用下载广告数据-注册成本广告主为每个注册所付出的成本，计算公式是：总花费/注册数，当天数据可能会有波动，次日早8点后稳定
     */
    public float $active_register_cost;
    
    /**
     * @var float $active_register_rate 应用下载广告数据-注册率注册用户占激活用户的比例
     */
    public float $active_register_rate;
    
    /**
     * @var float $attribution_retention_2d_cost 应用下载广告数据-2日留存成本所选时间范围内激活后第2天仍留存用户的获取成本建议仅查看已完整回传2日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第2天用户留存数
     */
    public float $attribution_retention_2d_cost;
    
    /**
     * @var float $attribution_retention_2d_rate 应用下载广告数据-2日留存率2日留存率=2日留存数/激活数
     */
    public float $attribution_retention_2d_rate;
    
    /**
     * @var int $attribution_retention_3d_cnt 应用下载广告数据-3日留存数所选时间范围内激活用户在激活后第3天留存的数量
     */
    public int $attribution_retention_3d_cnt;
    
    /**
     * @var float $attribution_retention_3d_cost 应用下载广告数据-3日留存成本所选时间范围内激活后第3天仍留存用户的获取成本建议仅查看已完整回传3日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第3天用户留存数
     */
    public float $attribution_retention_3d_cost;
    
    /**
     * @var float $attribution_retention_3d_rate 应用下载广告数据-3日留存率3日留存率=3日留存数/激活数
     */
    public float $attribution_retention_3d_rate;
    
    /**
     * @var int $attribution_retention_4d_cnt 应用下载广告数据-4日留存数所选时间范围内激活用户在激活后第4天留存的数量
     */
    public int $attribution_retention_4d_cnt;
    
    /**
     * @var float $attribution_retention_4d_cost 应用下载广告数据-4日留存成本所选时间范围内激活后第4天仍留存用户的获取成本建议仅查看已完整回传4日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第4天用户留存数
     */
    public float $attribution_retention_4d_cost;
    
    /**
     * @var float $attribution_retention_4d_rate 应用下载广告数据-4日留存率4日留存率=4日留存数/激活数
     */
    public float $attribution_retention_4d_rate;
    
    /**
     * @var int $attribution_retention_5d_cnt 应用下载广告数据-5日留存数所选时间范围内激活用户在激活后第5天留存的数量
     */
    public int $attribution_retention_5d_cnt;
    
    /**
     * @var float $attribution_retention_5d_cost 应用下载广告数据-5日留存成本所选时间范围内激活后第5天仍留存用户的获取成本建议仅查看已完整回传5日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第5天用户留存数
     */
    public float $attribution_retention_5d_cost;
    
    /**
     * @var float $attribution_retention_5d_rate 应用下载广告数据-5日留存率5日留存率=5日留存数/激活数
     */
    public float $attribution_retention_5d_rate;
    
    /**
     * @var int $attribution_retention_6d_cnt 应用下载广告数据-6日留存数所选时间范围内激活用户在激活后第6天留存的数量
     */
    public int $attribution_retention_6d_cnt;
    
    /**
     * @var float $attribution_retention_6d_cost 应用下载广告数据-6日留存成本所选时间范围内激活后第6天仍留存用户的获取成本建议仅查看已完整回传6日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第6天用户留存数
     */
    public float $attribution_retention_6d_cost;
    
    /**
     * @var float $attribution_retention_6d_rate 应用下载广告数据-6日留存率6日留存率=6日留存数/激活数
     */
    public float $attribution_retention_6d_rate;
    
    /**
     * @var int $attribution_retention_7d_cnt 应用下载广告数据-7日留存数所选时间范围内激活用户在激活后第7天留存的数量
     */
    public int $attribution_retention_7d_cnt;
    
    /**
     * @var float $attribution_retention_7d_cost 应用下载广告数据-7日留存成本所选时间范围内激活后第7天仍留存用户的获取成本建议仅查看已完整回传7日内留存数据的指标，否则会导致数值偏高影响投放判断计算公式：所选时间总消耗/所选时间激活后第7天用户留存数
     */
    public float $attribution_retention_7d_cost;
    
    /**
     * @var float $attribution_retention_7d_rate 应用下载广告数据-7日留存率7日留存率=7日留存数/激活数
     */
    public float $attribution_retention_7d_rate;
    
    /**
     * @var int $attribution_retention_7d_sum_cnt 应用下载广告数据-7日留存总数
     */
    public int $attribution_retention_7d_sum_cnt;
    
    /**
     * @var float $attribution_retention_7d_total_cost 应用下载广告数据-7日留存总成本
     */
    public float $attribution_retention_7d_total_cost;
    
    /**
     * @var float $game_addiction_cost 应用下载广告数据-关键行为成本广告主为每个有APP内关键行为的用户所付出的成本，计算公式是总花费/关键行为数。当天数据可能会有波动，次日早8点后稳定
     */
    public float $game_addiction_cost;
    
    /**
     * @var float $game_addiction_rate 应用下载广告数据-关键行为率关键行为用户占激活用户的比例
     */
    public float $game_addiction_rate;
    
    /**
     * @var int $pay_count 应用下载广告数据-首次付费次数用户在应用内首次完成付费的次数
     */
    public int $pay_count;
    
    /**
     * @var float $active_pay_cost 应用下载广告数据-首次付费成本用户在应用内首次完成付费的成本，计算方式：消耗/首次付费数
     */
    public float $active_pay_cost;
    
    /**
     * @var float $active_pay_rate 应用下载广告数据-首次付费率计算方式：首次付费数/激活数
     */
    public float $active_pay_rate;
    
    /**
     * @var int $loan_completion 应用下载广告数据-完件数互联网金融-贷款行业中，用户成功提交贷款额度申请的行为
     */
    public int $loan_completion;
    
    /**
     * @var float $loan_completion_cost 应用下载广告数据-完件成本计算方式：总花费／完件数。当天数据可能会有波动，次日早8点后稳定
     */
    public float $loan_completion_cost;
    
    /**
     * @var float $loan_completion_rate 应用下载广告数据-完件率计算方式：完件数／注册数
     */
    public float $loan_completion_rate;
    
    /**
     * @var float $pre_loan_credit_cost 应用下载广告数据-预授信成本计算方式：总花费／预授信数。当天数据可能会有波动，次日早8点后稳定
     */
    public float $pre_loan_credit_cost;
    
    /**
     * @var int $loan_credit 应用下载广告数据-授信数互联网金融-贷款行业中，用户提交贷款额度申请后，广告主审批通过，给予用户可贷款的额度
     */
    public int $loan_credit;
    
    /**
     * @var float $loan_credit_cost 应用下载广告数据-授信成本计算方式：总花费／授信数。当天数据可能会有波动，次日早8点后稳定
     */
    public float $loan_credit_cost;
    
    /**
     * @var float $loan_credit_rate 应用下载广告数据-授信率计算方式：授信数／完件数
     */
    public float $loan_credit_rate;
    
    /**
     * @var int $in_app_uv 应用下载广告数据-APP内访问用户调起APP后到达的次数，一般在DPA广告中使用
     */
    public int $in_app_uv;
    
    /**
     * @var int $in_app_detail_uv 应用下载广告数据-APP内访问详情页用户调起APP后到达指定详情页的次数，一般在DPA广告中使用
     */
    public int $in_app_detail_uv;
    
    /**
     * @var int $in_app_pay 应用下载广告数据-APP内付费用户调起APP后完成付费的次数，一般在DPA广告中使用
     */
    public int $in_app_pay;
    
    /**
     * @var int $in_app_order 应用下载广告数据-APP内下单用户调起APP后提交订单的次数，一般在DPA广告中使用
     */
    public int $in_app_order;
    
    /**
     * @var int $attribution_game_pay_7d_count 应用下载广告数据-7日付费次数（激活时间）用户激活应用后的7天内，在应用内完成付费的总次数，并将付费次数披露在每个用户的激活时间上
     */
    public int $attribution_game_pay_7d_count;
    
    /**
     * @var float $attribution_game_pay_7d_cost 应用下载广告数据-7日付费成本（激活时间）用户激活应用后的7天内，在应用内完成付费的平均成本，计算方式：消耗/7日付费次数(激活时间)
     */
    public float $attribution_game_pay_7d_cost;
    
    /**
     * @var int $attribution_active_pay_7d_per_count 应用下载广告数据-7日人均付费次数（激活时间）7天内用户的平均付费次数，计算方式：7日付费次数（激活时间）/7日首次付费数(激活时间)，对首次付费数的统计仅在计划内去重且披露在每个用户的激活时间上
     */
    public int $attribution_active_pay_7d_per_count;
    
    /**
     * @var int $game_pay_cost 应用下载广告数据-付费成本当天用户在应用内完成付费的平均成本，计算方式：消耗/付费次数
     */
    public int $game_pay_cost;
    
    /**
     * @var int $phone 落地页转化数据-点击电话按钮用户点击POI页面的电话按钮的次数
     */
    public int $phone;
    
    /**
     * @var int $form 落地页转化数据-表单提交用户在门店落地页多线沟通提交表单的次数
     */
    public int $form;
    
    /**
     * @var int $map_search 落地页转化数据-地图搜索用户进行地图搜索的次数
     */
    public int $map_search;
    
    /**
     * @var int $button 落地页转化数据-按钮button用户点击按钮button的次数
     */
    public int $button;
    
    /**
     * @var int $view 落地页转化数据-关键页面浏览用户在关键页面的浏览次数
     */
    public int $view;
    
    /**
     * @var int $download 落地页转化数据-下载开始用户点击下载开始的次数
     */
    public int $download;
    
    /**
     * @var int $qq 落地页转化数据-QQ咨询用户点击QQ咨询按钮的次数
     */
    public int $qq;
    
    /**
     * @var int $lottery 落地页转化数据-抽奖用户点击抽奖按钮的次数
     */
    public int $lottery;
    
    /**
     * @var int $vote 落地页转化数据-投票用户点击投票按钮的次数
     */
    public int $vote;
    
    /**
     * @var int $message 落地页转化数据-短信咨询用户点击短信咨询的次数
     */
    public int $message;
    
    /**
     * @var int $redirect 落地页转化数据-页面跳转用户跳转至其他页面的次数
     */
    public int $redirect;
    
    /**
     * @var int $shopping 落地页转化数据-商品购买用户购买商品的次数
     */
    public int $shopping;
    
    /**
     * @var int $consult 落地页转化数据-在线咨询用户点击在线咨询按钮的次数
     */
    public int $consult;
    
    /**
     * @var int $wechat 微信复制
     */
    public int $wechat;
    
    /**
     * @var int $phone_confirm 落地页转化数据-智能电话-确认拨打用户点击确认拨打电话按钮的次数
     */
    public int $phone_confirm;
    
    /**
     * @var int $coupon 落地页转化数据-建站卡券领取用户点击POI页面卡券领取按钮的次数
     */
    public int $coupon;
    
    /**
     * @var int $redirect_to_shop 落地页及门店数据-调起店铺用户调起第三方店铺的次数
     */
    public int $redirect_to_shop;
    
    /**
     * @var int $poi_collect 落地页及门店数据-店铺收藏用户点击POI页面的收藏按钮的次数
     */
    public int $poi_collect;
    
    /**
     * @var int $poi_address_click 落地页及门店数据-查看店铺地址用户点击顶部地图图标区域展开详细地图/点击图片下方地址展开详细地图/点击图片下方地址展开详细地图的次数
     */
    public int $poi_address_click;
    
    /**
     * @var int $luban_order_cnt 落地页及门店数据-鲁班订单量该条广告产生的订单数量
     */
    public int $luban_order_cnt;
    
    /**
     * @var float $luban_order_stat_amount 落地页及门店数据-鲁班订单金额该条广告产生订单的实际销售金额，不含优惠券和退款。当前仅支持商品推广的计划
     */
    public float $luban_order_stat_amount;
    
    /**
     * @var float $luban_order_roi 落地页及门店数据-鲁班ROI计算公式：订单金额/广告消耗。当前仅支持商品推广的计划
     */
    public float $luban_order_roi;
    
    /**
     * @var int $luban_live_enter_cnt 落地页及门店数据-直播间观看数用户进入您直播间的次数
     */
    public int $luban_live_enter_cnt;
    
    /**
     * @var int $live_watch_one_minute_count 落地页及门店数据-直播间超过1分钟观看数用户在您的直播间单次观看时长超过1分钟的次数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $live_watch_one_minute_count;
    
    /**
     * @var int $luban_live_follow_cnt 落地页及门店数据-直播间关注数您的直播间新增的关注数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $luban_live_follow_cnt;
    
    /**
     * @var int $live_fans_club_join_cnt 落地页及门店数据-直播间加入粉丝团用户在您的直播间成功加入粉丝团的次数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $live_fans_club_join_cnt;
    
    /**
     * @var int $luban_live_comment_cnt 落地页及门店数据-直播间评论数用户在您的直播间输入评论并点击发送消息的次数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $luban_live_comment_cnt;
    
    /**
     * @var int $luban_live_share_cnt 落地页及门店数据-直播间分享数用户在您的直播间点击分享到其他社交媒体的次数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $luban_live_share_cnt;
    
    /**
     * @var int $luban_live_gift_cnt 落地页及门店数据-直播间打赏次数用户在您的直播间成功打赏的次数，目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public int $luban_live_gift_cnt;
    
    /**
     * @var float $luban_live_gift_amount 落地页及门店数据-直播间礼物总金额用户在您的直播间打赏的总金额，单位：音浪。目前仅支持鲁班直播、抖音号推广直播、品牌Feeds Live直播和品牌TopLive直播
     */
    public float $luban_live_gift_amount;
    
    /**
     * @var int $luban_live_pay_order_count 落地页及门店数据-直播间订单量用户在您直播间的支付成功的订单量
     */
    public int $luban_live_pay_order_count;
    
    /**
     * @var float $luban_live_pay_order_stat_cost 落地页及门店数据-直播间订单金额用户在您直播间的支付成功的订单金额，单位：元。
     */
    public float $luban_live_pay_order_stat_cost;
    
    /**
     * @var int $live_component_click_count 落地页及门店数据-直播间组件点击数。用户点击小风车+卡片组件的总次数
     */
    public int $live_component_click_count;
    
    /**
     * @var float $live_component_click_cost 落地页及门店数据-直播间组件点击成本。总花费/组件点击数
     */
    public float $live_component_click_cost;
    
    /**
     * @var float $live_component_click_rate 落地页及门店数据-直播间组件点击率。组件点击数/组件曝光数
     */
    public float $live_component_click_rate;
    
    /**
     * @var int $wechat_login_count 落地页及门店数据-微信内注册数当天用户在微信内完成注册的总次数，将注册数记录在事件发生的时间上。例如，您的广告在8月20日展示给用户，用户点击广告后于8月23日在微信内产生注册行为，则这个注册行为将会展示在8月23日
     */
    public int $wechat_login_count;
    
    /**
     * @var int $attribution_wechat_login_30d_count 落地页及门店数据-微信内注册数(计费时间)微信内注册行为发生（或回传）后，将注册行为记录到过去30天内的扣费（消耗产生）时间上。例如，广告在8月20日展示给用户，用户点击广告后于8月23日在微信内产生注册行为，则这个注册行为将会展示在8月20日，8月23日没有注册数
     */
    public int $attribution_wechat_login_30d_count;
    
    /**
     * @var float $wechat_login_cost 落地页及门店数据-微信内注册成本当天用户在微信内完成注册的平均成本，计算公式：消耗/微信内注册数
     */
    public float $wechat_login_cost;
    
    /**
     * @var float $attribution_wechat_login_30d_cost 落地页及门店数据-微信内注册成本(计费时间)计算方式： 消耗 / 微信内注册数(计费时间)。例如，广告在8月20日展示给2位用户，此时广告计划10元，2位用户点击广告后于8月23日在微信内产生注册行为，则8月20日的微信内注册成本(计费时间) = 10/2=5元
     */
    public float $attribution_wechat_login_30d_cost;
    
    /**
     * @var int $wechat_first_pay_count 落地页及门店数据-微信内首次付费数当天用户在微信内首次完成付费的总次数，将付费数记录在事件发生的时间上。例如，用户于8月20日产生注册行为，8月23日在微信内产生首次付费行为，则这个付费行为将会展示在8月23日
     */
    public int $wechat_first_pay_count;
    
    /**
     * @var int $attribution_wechat_first_pay_30d_count 落地页及门店数据-微信内首次付费数(计费时间)微信内付费行为发生（或回传）后，将付费行为记录到过去30天内的扣费（消耗产生）时间上。例如，广告在8月20日展示给用户，用户点击广告后于8月23日在微信内产生首次付费行为，则这个付费行为将会展示在8月20日，8月23日没有付费数
     */
    public int $attribution_wechat_first_pay_30d_count;
    
    /**
     * @var float $wechat_first_pay_cost 落地页及门店数据-微信内首次付费成本当天用户在微信内完成首次付费的平均成本，计算公式：消耗/微信内首次付费数
     */
    public float $wechat_first_pay_cost;
    
    /**
     * @var float $attribution_wechat_first_pay_30d_cost 落地页及门店数据-微信内首次付费成本(计费时间)计算方式：消耗 / 微信内首次付费数（计费时间）。例如，广告在8月20日展示给2位用户，此时广告计划10元，2位用户点击广告后于8月23日在微信内产生首次付费行为，则8月20日的微信内首次付费成本(计费时间) = 10/2=5元
     */
    public float $attribution_wechat_first_pay_30d_cost;
    
    /**
     * @var float $wechat_first_pay_rate 落地页及门店数据-微信内首次付费率计算公式：微信内首次付费数/微信内注册数
     */
    public float $wechat_first_pay_rate;
    
    /**
     * @var float $attribution_wechat_first_pay_30d_rate 落地页及门店数据-微信内首次付费率(计费时间)计算公式：微信内首次付费数(计费时间)/微信内注册数(计费时间)
     */
    public float $attribution_wechat_first_pay_30d_rate;
    
    /**
     * @var float $wechat_pay_amount 落地页及门店数据-微信内首次付费金额当天用户在微信内完成首次付费的总金额
     */
    public float $wechat_pay_amount;
    
    /**
     * @var float $attribution_wechat_pay_30d_amount 落地页及门店数据-微信内首次付费金额(计费时间)当天用户在微信内完成首次付费的总金额，将付费金额记录到过去30天内的扣费（消耗产生）时间上。例如，广告在8月20日展示给用户，用户点击广告后于8月23日在微信内产生首次付费行为，则这个首次付费金额将会展示在8月20日，8月23日没有首次付费金额
     */
    public float $attribution_wechat_pay_30d_amount;
    
    /**
     * @var float $attribution_wechat_pay_30d_roi 落地页及门店数据-微信内首次付费ROI所选时间范围内的微信内首次付费ROI，计算公式：微信内首次付费金额（计费时间）/消耗
     */
    public float $attribution_wechat_pay_30d_roi;
    
    /**
     * @var int $phone_effective 落地页及门店数据-智能电话-有效接通用户在门店落地页点击多线沟通的电话按钮并有效接通的次数
     */
    public int $phone_effective;
    
    /**
     * @var int $total_play 视频数据-播放数播放时间大于0S的数量，在某些蜂窝网络环境下，需要您手动点击开始才会开始播放，因此有时播放数小于展示数
     */
    public int $total_play;
    
    /**
     * @var int $valid_play 视频数据-有效播放数竞价广告播放时间大于等于10秒的数量，如果视频总时长不足10秒，则记录播放完成的次数。品牌广告在部分APP（头条、头条lite、抖音、西瓜、抖音火山版、皮皮虾）播放时间大于等于5秒的数量，在其他APP大于等于3秒的数量，如果视频总时长不足5秒/3秒时，则记录播放完成的次数
     */
    public int $valid_play;
    
    /**
     * @var float $valid_play_cost 视频数据-有效播放成本计算公式：总花费/有效播放数，当天数据可能会有波动，次日早8点后稳定
     */
    public float $valid_play_cost;
    
    /**
     * @var int $play_50_feed_break 视频数据-50%进度播放数用户播放至视频长度50%及以上的次数，包括跳跃播放至此长度的播放次数
     */
    public int $play_50_feed_break;
    
    /**
     * @var int $play_75_feed_break 视频数据-75%进度播放数用户播放至视频长度75%及以上的次数，包括跳跃播放至此长度的播放次数
     */
    public int $play_75_feed_break;
    
    /**
     * @var int $play_100_feed_break 视频数据-99%进度播放数用户播放至视频长度99%及以上的次数，包括跳跃播放至此长度的播放次数
     */
    public int $play_100_feed_break;
    
    /**
     * @var float $average_play_time_per_play 视频数据-平均单次播放时长，单位：秒计算方法：视频播放总实际时长／播放总次数（不包含跳跃的时长）
     */
    public float $average_play_time_per_play;
    
    /**
     * @var float $play_over_rate 视频数据-播完率计算公式：播放完成数/播放数
     */
    public float $play_over_rate;
    
    /**
     * @var int $wifi_play 视频数据-WiFi播放量在wifi环境下视频的播放数
     */
    public int $wifi_play;
    
    /**
     * @var int $play_duration_sum 视频数据-播放时长，单位ms计算方法：视频播放总实际时长／播放总次数（不包含跳跃的时长）
     */
    public int $play_duration_sum;
    
    /**
     * @var int $advanced_creative_phone_click 附加创意-附加创意电话按钮点击用户查看创意的附加创意后，点击电话拨打按钮的次数
     */
    public int $advanced_creative_phone_click;
    
    /**
     * @var int $advanced_creative_counsel_click 附加创意-附加创意在线咨询点击用户查看创意的附加创意后，点击在线咨询的次数
     */
    public int $advanced_creative_counsel_click;
    
    /**
     * @var int $advanced_creative_form_click 附加创意-附加创意表单按钮点击用户查看创意的附加创意后，点击表单提交按钮的次数
     */
    public int $advanced_creative_form_click;
    
    /**
     * @var int $advanced_creative_coupon_addition 附加创意-附加创意卡券领取用户查看创意的附加创意后，领取卡券的次数
     */
    public int $advanced_creative_coupon_addition;
    
    /**
     * @var int $advanced_creative_form_submit 附加创意-附加创意表单提交用户查看创意的附加创意后，提交表单的次数
     */
    public int $advanced_creative_form_submit;
    
    /**
     * @var int $card_show 视频数据3秒卡片展现对于视频卡片类广告，在视频播放到3秒时进行卡片展现的数量
     */
    public int $card_show;
    
    /**
     * @var int $share 互动数据-分享数用户把分享广告到其他社交媒体的次数，成功完成一次分享行为记一次分享数
     */
    public int $share;
    
    /**
     * @var int $comment 互动数据-评论数用户在评论区对广告创意输入评论并点击提交的次数，仅限有评论区的APP（西瓜目前没有评论区）
     */
    public int $comment;
    
    /**
     * @var int $like 互动数据-点赞数广告被用户点赞的数量
     */
    public int $like;
    
    /**
     * @var int $follow 互动数据-新增关注数广告被受众新增关注的数量，目前抖音、头条号外、微头条、抖音火山版可新增关注
     */
    public int $follow;
    
    /**
     * @var int $home_visited 互动数据-主页访问量点击广告头像进入主页进行访问的次数，目前抖音、头条号外、抖音火山版可进行主页访问
     */
    public int $home_visited;
    
    /**
     * @var int $ies_music_click 互动数据-音乐查看数抖音广告中，用户点击音乐查看的数量
     */
    public int $ies_music_click;
    
    /**
     * @var int $location_click 互动数据-POI点击数抖音广告中，用户点击POI组件的次数，一般出现在信息流或评论页面。POI为Point of Interest缩写
     */
    public int $location_click;
    
    /**
     * @var int $message_action 互动数据-私信数用户在广告主抖音号主页中发起私信的次数，按人次记数
     */
    public int $message_action;
    
    /**
     * @var int $click_landing_page 互动数据-推广页访问量用户在广告主抖音号主页内访问落地页的次数
     */
    public int $click_landing_page;
    
    /**
     * @var int $click_shopwindow 互动数据-主页商品橱窗访问量用户在广告主抖音号主页中访问商品橱窗的次数
     */
    public int $click_shopwindow;
    
    /**
     * @var int $click_website 互动数据-主页内落地页访问量（主页官网访问量）用户在广告主抖音号主页内访问落地页的次数
     */
    public int $click_website;
    
    /**
     * @var int $click_call_dy 互动数据-主页内电话拨打点击量用户在广告主抖音号主页内点击电话拨打的次数
     */
    public int $click_call_dy;
    
    /**
     * @var int $submit_certification_count 提交身份认证数-出行行业司机在应用内提交身份认证的次数司机端，司机提交身份认证的次数
     */
    public int $submit_certification_count;
    
    /**
     * @var int $approval_count 通过身份认证数-出行行业司机在应用内成功通过身份认证的次数司机端，司机通过身份认证的次数
     */
    public int $approval_count;
    
    /**
     * @var int $first_rental_order_count 乘客首次下单数-出行行业乘客在应用内首次成功下单的数量乘客端，乘客首次发单的次数
     */
    public int $first_rental_order_count;
    
    /**
     * @var int $commute_first_pay_count 乘客首次支付数-出行行业乘客在应用内首次成功支付订单的数量乘客端，乘客首次支付订单的次数
     */
    public int $commute_first_pay_count;
    
    /**
     * @var int $attribution_active_pay_intra_one_day_count 游戏行业-激活后24h首次付费数激活后24h首次付费数，归因到激活时间
     */
    public int $attribution_active_pay_intra_one_day_count;
    
    /**
     * @var float $attribution_active_pay_intra_one_day_cost 游戏行业-激活后24h首次付费成本所选日期的消耗/激活后24h首次付费数
     */
    public float $attribution_active_pay_intra_one_day_cost;
    
    /**
     * @var float $attribution_active_pay_intra_one_day_rate 游戏行业-激活后24h首次付费率激活后24h首次付费数/激活数
     */
    public float $attribution_active_pay_intra_one_day_rate;
    
    /**
     * @var float $attribution_active_pay_intra_one_day_amount 游戏行业-激活后24h付费金额激活后24h，APP内产生的付费金额
     */
    public float $attribution_active_pay_intra_one_day_amount;
    
    /**
     * @var float $attribution_active_pay_intra_one_day_roi 游戏行业-激活后24小时付费roi激活后24h付费金额/所选日期的消耗
     */
    public float $attribution_active_pay_intra_one_day_roi;
    
    /**
     * @var float $attribution_micro_game_0d_ltv 小游戏当日LTV-所选时间范围内的激活用户在激活当日的变现金额
     */
    public float $attribution_micro_game_0d_ltv;
    
    /**
     * @var float $attribution_micro_game_3d_ltv 小游戏激活后三日LTV-所选时间范围内的激活用户在激活后三日内的变现金额
     */
    public float $attribution_micro_game_3d_ltv;
    
    /**
     * @var float $attribution_micro_game_7d_ltv 小游戏激活后七日LTV-所选时间范围内的激活用户在激活后七日内的变现金额
     */
    public float $attribution_micro_game_7d_ltv;
    
    /**
     * @var float $attribution_micro_game_3d_roi 小游戏激活后三日广告变现ROI-所选时间范围内的激活用户在激活后三日内的广告变现ROI，计算公式是：三日LTV / 所选时间的消耗
     */
    public float $attribution_micro_game_3d_roi;
    
    /**
     * @var float $attribution_micro_game_7d_roi 小游戏激活后七日广告变现ROI-所选时间范围内的激活用户在激活后七日内的广告变现ROI，计算公式是：七日LTV / 所选时间的消耗
     */
    public float $attribution_micro_game_7d_roi;
    
    /**
     * @var float $attribution_game_in_app_ltv_1day 当日付费金额-所选时间范围内的激活用户，激活当日在APP内的付费金额
     */
    public float $attribution_game_in_app_ltv_1day;
    
    /**
     * @var float $attribution_game_in_app_ltv_7days 激活后六日付费金额
     */
    public float $attribution_game_in_app_ltv_7days;
    
    /**
     * @var float $attribution_game_in_app_roi_1day 当日付费ROI
     */
    public float $attribution_game_in_app_roi_1day;
    
    /**
     * @var float $attribution_game_in_app_roi_3days 激活后二日付费ROI
     */
    public float $attribution_game_in_app_roi_3days;
    
    /**
     * @var float $attribution_game_in_app_roi_5days 激活后四日付费ROI
     */
    public float $attribution_game_in_app_roi_5days;
    
    /**
     * @var float $attribution_game_in_app_roi_7days 激活后六日付费ROI
     */
    public float $attribution_game_in_app_roi_7days;
    
    /**
     * @var int $attribution_active_pay_7d_count 激活后七日首次付费数
     */
    public int $attribution_active_pay_7d_count;
    
    /**
     * @var float $attribution_active_pay_7d_rate 激活后七日首次付费率
     */
    public float $attribution_active_pay_7d_rate;
    
    /**
     * @var float $attribution_game_in_app_ltv_2days 激活后一日付费金额
     */
    public float $attribution_game_in_app_ltv_2days;
    
    /**
     * @var float $attribution_game_in_app_ltv_4days 激活后三日付费金额
     */
    public float $attribution_game_in_app_ltv_4days;
    
    /**
     * @var float $attribution_game_in_app_ltv_6days 激活后五日付费金额
     */
    public float $attribution_game_in_app_ltv_6days;
    
    /**
     * @var float $attribution_game_in_app_ltv_8days 激活后七日付费金额
     */
    public float $attribution_game_in_app_ltv_8days;
    
    /**
     * @var float $attribution_game_in_app_roi_2days 激活后一日付费ROI
     */
    public float $attribution_game_in_app_roi_2days;
    
    /**
     * @var float $attribution_game_in_app_roi_4days 激活后三日付费ROI
     */
    public float $attribution_game_in_app_roi_4days;
    
    /**
     * @var float $attribution_game_in_app_roi_6days 激活后五日付费ROI
     */
    public float $attribution_game_in_app_roi_6days;
    
    /**
     * @var float $attribution_game_in_app_roi_8days 激活后七日付费ROI
     */
    public float $attribution_game_in_app_roi_8days;
    
    /**
     * @var float $attribution_active_pay_7d_cost 激活后七日首次付费成本
     */
    public float $attribution_active_pay_7d_cost;
    
    /**
     * @var int $attribution_day_active_pay_count 计费当日激活且首次付费数
     */
    public int $attribution_day_active_pay_count;
    
    /**
     * @var float $stat_pay_amount 付费金额（回传时间）
     */
    public float $stat_pay_amount;
    
    /**
     * @var float $pay_amount_roi 付费ROI（回传时间）
     */
    public float $pay_amount_roi;
    
    /**
     * @var int $customer_effective 有效获客
     */
    public int $customer_effective;
    
    /**
     * @var float $stat_union_ltv_0 当日LTV
     */
    public float $stat_union_ltv_0;
    
    /**
     * @var float $stat_union_ltv_3 激活后三日LTV
     */
    public float $stat_union_ltv_3;
    
    /**
     * @var float $stat_union_ltv_7 激活后七日LTV
     */
    public float $stat_union_ltv_7;
    
    /**
     * @var float $union_roi_0 当日广告变现ROI
     */
    public float $union_roi_0;
    
    /**
     * @var float $union_roi_3 激活后三日广告变现ROI
     */
    public float $union_roi_3;
    
    /**
     * @var float $union_roi_7 激活后七日广告变现ROI
     */
    public float $union_roi_7;
    
}