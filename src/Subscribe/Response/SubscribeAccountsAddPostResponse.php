<?php

declare(strict_types=1);

namespace AdOceanSdk\Subscribe\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class SubscribeAccountsAddPostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Subscribe\Data\SubscribeAccountsAddPostResponseData $data json返回值
     */
    public \AdOceanSdk\Subscribe\Data\SubscribeAccountsAddPostResponseData $data;

    public function getData(): \AdOceanSdk\Subscribe\Data\SubscribeAccountsAddPostResponseData
    {
        return $this->data;
    }
}