<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DMPCustomAudiencePublishPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var json $data json返回值,返回的操作状态信息和失败后的错误信息
     */
    public json $data;
    
    public function getData(): \AdOceanSdk\DMP\Data\DMPCustomAudiencePublishPostResponseData
    {
        return $this->data;
    }
}