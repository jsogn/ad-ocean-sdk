<?php

declare(strict_types=1);

namespace AdOceanSdk\Account\Response;

use AdOceanSdk\Account\Data\AccountAdvertiserInfoGetResponseData;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use ClassTransformer\Attributes\ConvertArray;

class AccountAdvertiserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<AccountAdvertiserInfoGetResponseData> $data json返回值
     */
    #[ConvertArray(AccountAdvertiserInfoGetResponseData::class)]
    public array $data;


    /**
     * @return array<AccountAdvertiserInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}