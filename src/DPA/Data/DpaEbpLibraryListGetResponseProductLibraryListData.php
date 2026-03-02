<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 商品库list
class DpaEbpLibraryListGetResponseProductLibraryListData extends Data
{

    /**
     * @var int $advertiser_id 客户id
     */
    public int $advertiser_id;

    /**
     * @var int $platform_id 商品库id
     */
    public int $platform_id;

    /**
     * @var string $name 商品库名称
     */
    public string $name;

    /**
     * @var int $store_type 商品库类型，具体枚举可参考【附录-商品库枚举说明】
     */
    public int $store_type;

    /**
     * @var array<string> $backup_images 备份图片
     */
    public array $backup_images;

    /**
     * @var int $source 数据导入方式
     */
    public int $source;

    /**
     * @var string $create_time 创建时间
     */
    public string $create_time;

    /**
     * @var string $modify_time 最近一次更新时间
     */
    public string $modify_time;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpLibraryListGetResponseProductLibraryListConfData $conf 
     */
    public \AdOceanSdk\DPA\Data\DpaEbpLibraryListGetResponseProductLibraryListConfData $conf;

    /**
     * @var int $operate_auth 
     */
    public int $operate_auth;

    /**
     * @var string $data_status json串key-value形式：表示词包、分类、元数据、用户行为、视频等数据的状态
     */
    public string $data_status;

    /**
     * @var int $account_type 商品库所属账户类型
     */
    public int $account_type;

    /**
     * @var int $history_account_id 历史所属账户ID（从普通版工作台导入到升级版工作台的商品原始所属账户）
     */
    public int $history_account_id;

    /**
     * @var int $history_account_type 历史所属账户类型
     */
    public int $history_account_type;

    /**
     * @var int $source_account_id 写入来源账户ID for 自动识别
     */
    public int $source_account_id;

    /**
     * @var int $source_account_type 写入来源账户类型 for 自动识别
     */
    public int $source_account_type;

}