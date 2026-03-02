<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// 
class DpaEbpLibraryListGetResponseProductLibraryListConfData extends Data
{

    /**
     * @var int $schedule_type 调度方式(自动/手动)
     */
    public int $schedule_type;

    /**
     * @var string $idx_url 索引地址，自动更新时有
     */
    public string $idx_url;

    /**
     * @var string $data_file 数据文件，手动上传文件时有
     */
    public string $data_file;

    /**
     * @var string $file_type 数据文件类型
     */
    public string $file_type;

    /**
     * @var string $update_cron 更新周期
     */
    public string $update_cron;

    /**
     * @var int $feed_status 更新状态
     */
    public int $feed_status;

    /**
     * @var string $last_update_time 上次更新时间
     */
    public string $last_update_time;

    /**
     * @var int $updated_cnt 商品正常数量
     */
    public int $updated_cnt;

    /**
     * @var int $total_cnt 商品总数
     */
    public int $total_cnt;

    /**
     * @var int $update_mode 更新方式(全量/增量)
     */
    public int $update_mode;

}