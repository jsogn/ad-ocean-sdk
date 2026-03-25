<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ProjectCpaBidUpdatePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\ProjectCpaBidUpdatePostResponseData $data json返回值
     */
    public \AdOceanSdk\Advertising\Data\ProjectCpaBidUpdatePostResponseData $data;

    public function getData(): \AdOceanSdk\Advertising\Data\ProjectCpaBidUpdatePostResponseData
    {
        return $this->data;
    }
}