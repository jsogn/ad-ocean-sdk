<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EbpLevelGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\EBP\Data\EbpLevelGetGetResponseData $data json返回值
     */
    public \AdOceanSdk\EBP\Data\EbpLevelGetGetResponseData $data;

    public function getData(): \AdOceanSdk\EBP\Data\EbpLevelGetGetResponseData
    {
        return $this->data;
    }
}