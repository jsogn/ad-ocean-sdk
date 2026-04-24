<?php

declare(strict_types=1);

namespace AdOceanSdk;

use InvalidArgumentException;

enum RequestMethodEnum
{
    case GET;
    case POST;
    case PUT;
    case PATCH;
    case DELETE;
    case HEAD;
    case OPTIONS;

    public static function fromString(string $method): self
    {
        return match (strtoupper(trim($method))) {
            'GET' => self::GET,
            'POST' => self::POST,
            'PUT' => self::PUT,
            'PATCH' => self::PATCH,
            'DELETE' => self::DELETE,
            'HEAD' => self::HEAD,
            'OPTIONS' => self::OPTIONS,
            default => throw new InvalidArgumentException("Unsupported HTTP method: {$method}"),
        };
    }

    public function httpName(): string
    {
        return $this->name;
    }

    public function defaultRequestFormat(): RequestFormatEnum
    {
        return match ($this) {
            self::GET, self::DELETE, self::HEAD, self::OPTIONS => RequestFormatEnum::QUERY,
            self::POST, self::PUT, self::PATCH => RequestFormatEnum::JSON,
        };
    }
}