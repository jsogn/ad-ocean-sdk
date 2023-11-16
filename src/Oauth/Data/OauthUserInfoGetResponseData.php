<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Data;

use AdOceanSdk\Kernel\Data\Data;

// 返回数据
class OauthUserInfoGetResponseData extends Data
{

    /**
     * @var int $id 用户id
     */
    public int $id;
    
    /**
     * @var string $email 邮箱（已经脱敏处理）
     */
    public string $email;
    
    /**
     * @var string $display_name 用户名
     */
    public string $display_name;
    
}