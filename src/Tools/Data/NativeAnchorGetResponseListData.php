<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 广告账户下原生锚点列表
class NativeAnchorGetResponseListData extends Data
{

    /**
     * @var string $anchor_id 锚点id
     */
    public string $anchor_id;

    /**
     * @var string $anchor_name 锚点名称
     */
    public string $anchor_name;

    /**
     * @var string $anchor_type 锚点类型
     */
    public string $anchor_type;

    /**
     * @var string $status 锚点审核状态
     */
    public string $status;

    /**
     * @var string $source 锚点来源
     */
    public string $source;

    /**
     * @var string $create_time 锚点创建日期，格式：yyyy-MM-dd
     */
    public string $create_time;

    /**
     * @var string $android_package_name 安卓应用包名
     */
    public string $android_package_name;

    /**
     * @var string $ios_package_name ios应用包名
     */
    public string $ios_package_name;

    /**
     * @var string $anchor_share_type 锚点共享关系
     */
    public string $anchor_share_type;

}