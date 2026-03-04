<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EbpAdvertiserTaskListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\EBP\Data\EbpAdvertiserTaskListGetResponseData $data json返回值
     */
    public \AdOceanSdk\EBP\Data\EbpAdvertiserTaskListGetResponseData $data;

    public function getData(): \AdOceanSdk\EBP\Data\EbpAdvertiserTaskListGetResponseData
    {
        return $this->data;
    }
}