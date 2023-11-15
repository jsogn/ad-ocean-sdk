<?php

namespace AdOceanSdk\Kernel\Interface;

interface ResponseInterface
{
    public function getData();

    public function getRequestId(): string;

    public function getCode(): int;

    public function getMessage(): string;

    public function toArray(): array;
}