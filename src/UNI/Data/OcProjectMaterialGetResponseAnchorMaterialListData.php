<?php

declare(strict_types=1);

namespace AdOceanSdk\UNI\Data;

use AdOceanSdk\Kernel\Data\Data;

// 原生锚点素材
class OcProjectMaterialGetResponseAnchorMaterialListData extends Data
{

    /**
     * @var string $anchor_id 原生锚点id
     */
    public string $anchor_id;

    /**
     * @var string $anchor_type 可选值: APP_GAME 应用下载-游戏锚点APP_INTERNET_SERVICE 应用下载-网服锚点APP_SHOP 应用下载-电商锚点INSURANCE 保险锚点ONLINE_SUBSCRIBE 通用锚点PRIVATE_CHAT 私信锚点SHOPPING_CART 购物车锚点
     */
    public string $anchor_type;

}