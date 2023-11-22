<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AudiencePackageDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\AudiencePackageDeletePostResponseData $data json返回值
     */
    public \AdOceanSdk\Tools\Data\AudiencePackageDeletePostResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\AudiencePackageDeletePostResponseData
    {
        return $this->data;
    }
}