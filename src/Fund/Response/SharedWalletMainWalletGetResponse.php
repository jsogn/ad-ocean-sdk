<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class SharedWalletMainWalletGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseData $data json返回值
     */
    public \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Fund\Data\SharedWalletMainWalletGetResponseData
    {
        return $this->data;
    }
}