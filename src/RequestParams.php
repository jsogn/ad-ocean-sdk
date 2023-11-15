<?php

namespace AdOceanSdk;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Exceptions\RequestParamValidateException;
use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use W7\Validate\Exception\ValidateException;
use W7\Validate\Validate;

class RequestParams extends Data implements RequestParamInterface
{
    /**
     * @return void
     * @throws RequestParamValidateException
     */
    public function validate(): void
    {
        if (!$this->rules()) {
            return;
        }
        try {
            Validate::make($this->rules(), $this->messages())
                ->check($this->toArray());
        } catch (ValidateException $e) {
            throw new RequestParamValidateException($e->getMessage());
        }
    }

    public function rules(): array
    {
        return [];
    }

    public function messages(): array
    {
        return [];
    }
}