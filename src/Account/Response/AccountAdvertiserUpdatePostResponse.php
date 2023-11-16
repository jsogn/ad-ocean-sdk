<?php

declare(strict_types=1);

namespace AdOceanSdk\Account\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AccountAdvertiserUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Account\Data\AccountAdvertiserUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Account\Data\AccountAdvertiserUpdatePostResponseData $data;
    

    public function getData(): \AdOceanSdk\Account\Data\AccountAdvertiserUpdatePostResponseData
    {
        return $this->data;
    }
}