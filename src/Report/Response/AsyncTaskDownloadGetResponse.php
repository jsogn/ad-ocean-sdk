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
     * @var object $data 返回数据
     */
    public object $data;
    
    public function getData(): \AdOceanSdk\Report\Data\AsyncTaskDownloadGetResponseData
    {
        return $this->data;
    }
}