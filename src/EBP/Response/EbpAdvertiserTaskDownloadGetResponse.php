<?php

declare(strict_types=1);

namespace AdOceanSdk\EBP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class EbpAdvertiserTaskDownloadGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var mixed $data json返回值
     */
    public mixed $data;

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->data;
    }
}