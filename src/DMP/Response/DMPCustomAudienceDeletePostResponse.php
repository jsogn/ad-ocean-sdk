<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DMPCustomAudienceDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DMP\Data\DMPCustomAudienceDeletePostResponseData $data json返回值,返回的操作状态信息和失败后的错误信息
     */
    public \AdOceanSdk\DMP\Data\DMPCustomAudienceDeletePostResponseData $data;
    
    public function getData(): \AdOceanSdk\DMP\Data\DMPCustomAudienceDeletePostResponseData
    {
        return $this->data;
    }
}