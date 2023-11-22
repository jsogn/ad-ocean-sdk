<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DMPDataSourceFileUploadPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DMP\Data\DMPDataSourceFileUploadPostResponseData $data json返回值
     */
    public \AdOceanSdk\DMP\Data\DMPDataSourceFileUploadPostResponseData $data;
    
    public function getData(): \AdOceanSdk\DMP\Data\DMPDataSourceFileUploadPostResponseData
    {
        return $this->data;
    }
}