<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\OauthUserInfoGetResponseData;
use ClassTransformer\Attributes\ConvertArray;

class OauthUserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<OauthUserInfoGetResponseData> $data 返回数据
     */
    #[ConvertArray(OauthUserInfoGetResponseData::class)]
    public array $data;


    /**
     * @return array<OauthUserInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}