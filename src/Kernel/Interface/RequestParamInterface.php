<?php

namespace AdOceanSdk\Kernel\Interface;

interface RequestParamInterface
{
    public function toArray(): array;

    public function messages(): array;

    public function rules(): array;

    public function validate(): void;
}