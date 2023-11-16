<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AdvertiserAvatarGetResponseData extends Data
{

    /**
     * @var string $advertiser_id 广告主id
     */
    public string $advertiser_id;
    
    /**
     * @var int $avatar_status 头像审核状态UNSET-未设置，IN_AUDIT-审核中，AUDIT_REJECT-审核被拒，AUDIT_PASS-审核通过
     */
    public int $avatar_status;
    
    /**
     * @var string $avatar_reason 头像被拒原因
     */
    public string $avatar_reason;
    
    /**
     * @var int $source_status 品牌审核状态UNSET-未设置，IN_AUDIT-审核中，AUDIT_REJECT-审核被拒，AUDIT_PASS-审核通过
     */
    public int $source_status;
    
    /**
     * @var string $source_info 品牌信息
     */
    public string $source_info;
    
    /**
     * @var string $source_reason 品牌信息被拒原因
     */
    public string $source_reason;
    
    /**
     * @var \AdOceanSdk\Advertiser\Data\AdvertiserAvatarGetResponseAvatarInfoData $avatar_info 头像信息
     */
    public \AdOceanSdk\Advertiser\Data\AdvertiserAvatarGetResponseAvatarInfoData $avatar_info;
    
}