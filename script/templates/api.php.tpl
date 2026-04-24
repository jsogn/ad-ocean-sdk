<?php

namespace {{namespace}};

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc {{requestTitle}}
 * @doc  {{requestDoc}}
 */
class {{className}} extends {{parentClass}}
{
    protected string $address = '{{address}}';

    protected RequestMethodEnum $method = RequestMethodEnum::{{method}};

    public function call({{paramsClass}}|RequestParamInterface|array $params = []): {{responseClass}}
    {
        $response = parent::call($params);

        return {{responseClass}}::from($response->toArray());
    }
}