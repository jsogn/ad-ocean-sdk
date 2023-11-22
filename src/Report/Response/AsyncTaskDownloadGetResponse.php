<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AsyncTaskDownloadGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array $data 返回数据
     */
    public array $data;

    public function getData(): array
    {
        return $this->data;
    }
}