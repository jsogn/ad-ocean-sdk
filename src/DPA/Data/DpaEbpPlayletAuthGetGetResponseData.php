<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class DpaEbpPlayletAuthGetGetResponseData extends Data
{

    /**
     * @var string $album_id 短剧ID
     */
    public string $album_id;

    /**
     * @var string $status 申请状态，枚举：ING 申请中SUCCESS 申请成功FAIL 申请失败UNSUBMITTED 未提交申请
     */
    public string $status;

    /**
     * @var string $apply_time 申请提交时间，时间格式为yyyy-mm-dd hh:mm:ss
     */
    public string $apply_time;

    /**
     * @var string $expire_time 授权过期时间，时间格式为yyyy-mm-dd hh:mm:ss
     */
    public string $expire_time;

    /**
     * @var string $album_name 短剧名称
     */
    public string $album_name;

}