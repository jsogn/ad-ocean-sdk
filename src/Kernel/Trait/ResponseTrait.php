<?php

namespace AdOceanSdk\Kernel\Trait;

trait ResponseTrait
{
    public int    $code;
    public string $message;
    public string $request_id;

    public array  $_rawArray = [];

    public static function fromJsonString(string $jsonString): static
    {
        $response = json_decode($jsonString, true);

        return static::from([
            'code'       => $response['code'],
            'message'    => $response['message'],
            'data'       => $response['data'] ?? [],
            'request_id' => $response['request_id']
        ]);
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getRequestId(): string
    {
        return $this->request_id;
    }

    public function getRawArray(): array
    {
        return $this->_rawArray;
    }

    public function setRawArray(array $rawArray): void
    {
        $this->_rawArray = $rawArray;
    }
}