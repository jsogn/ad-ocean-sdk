<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 原生锚点素材，当 anchor_related_type =SELECT时必填，数量上限为1
class PromotionUpdatePostParamPromotionMaterialsAnchorMaterialListData extends Data
{

    /**
     * @var string $anchor_type 锚点类型，允许值：应用下载-游戏：APP_GAME、 应用下载-网服：APP_INTERNET_SERVICE、应用下载-电商：APP_SHOP、高级在线预约：ONLINE_SUBSCRIBE、购物车：SHOPPING_CART、私信：PRIVATE_CHAT、保险：INSURANCE
     */
    public string $anchor_type;
    
    /**
     * @var string $anchor_id 原生锚点id可使用【获取账户下的原生锚点】获得当 anchor_related_type =SELECT时必填
     */
    public string $anchor_id;
    
}