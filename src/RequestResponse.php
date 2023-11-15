<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class RequestResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    public ?array $data = [];

    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 获取分页信息
     * @return ResponsePageInfoData|null
     */
    public function getPageInfo(): ?ResponsePageInfoData
    {
        if ($this->data['page_info'] ?? null) {
            return null;
        }

        return ResponsePageInfoData::from($this->data['page_info']);
    }
}