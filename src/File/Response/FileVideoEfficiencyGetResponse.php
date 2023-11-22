<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class FileVideoEfficiencyGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\File\Data\FileVideoEfficiencyGetResponseData $data 返回数据
     */
    public \AdOceanSdk\File\Data\FileVideoEfficiencyGetResponseData $data;
    
    public function getData(): \AdOceanSdk\File\Data\FileVideoEfficiencyGetResponseData
    {
        return $this->data;
    }
}