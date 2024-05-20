<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AccountFundGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\AccountFundGetGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\AccountFundGetGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\AccountFundGetGetResponseData
    {
        return $this->data;
    }
}