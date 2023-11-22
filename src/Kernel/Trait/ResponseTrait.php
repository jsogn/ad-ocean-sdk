<?php

namespace AdOceanSdk\Kernel\Trait;

trait ResponseTrait
{
    public int    $code;
    public string $message;
    public string $request_id;

    private array $_raw = [];

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

    public static function from(array $data): static
    {
        $obj = parent::from($data);
        $obj->setRaw($data);

        return $obj;
    }

    public function setRaw(array $raw): void
    {
        $this->_raw = $raw;
    }

    public function toArray(): array
    {
        if ($this->_raw) {
            return $this->_raw;
        }

        return static::toArray();
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
        return $this->_raw;
    }
}