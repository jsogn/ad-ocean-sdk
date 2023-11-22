<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Params;

use AdOceanSdk\RequestParams;

class DMPDataSourceFileUploadPostParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var file $file 文件
     */
    public file $file;
    
    /**
     * @var string $file_signature 文件MD5
     */
    public string $file_signature;
    
}