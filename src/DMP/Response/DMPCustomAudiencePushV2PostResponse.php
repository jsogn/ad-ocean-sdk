<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DMPCustomAudiencePushV2PostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array $data json返回值,返回的操作状态信息和失败后的错误信息
     */
    public array $data;

    public function getData(): array
    {
        return $this->data;
    }
}