<?php

declare(strict_types=1);

namespace AdOceanSdk\Kernel\Middleware;

use AdOceanSdk\RequestApi;

/**
 * 不可变请求上下文。
 *
 * 在 middleware 链中以值传递，需修改时使用 with*() 创建新实例，
 * 避免 hooks 风格 interceptor 中 `&$params/&$options` 的隐式副作用问题。
 */
final class RequestContext
{
    /**
     * @param array<string, mixed> $params 业务参数（已根据请求格式做过预处理）
     * @param array<string, mixed> $options Guzzle 请求选项
     * @param array<string, mixed> $attributes 中间件之间共享的临时属性（如重试次数等）
     */
    public function __construct(
        public readonly RequestApi $api,
        public readonly string $method,
        public readonly string $uri,
        public readonly array $params = [],
        public readonly array $options = [],
        public readonly array $attributes = [],
    ) {
    }

    public function withApi(RequestApi $api): self
    {
        return new self($api, $this->method, $this->uri, $this->params, $this->options, $this->attributes);
    }

    public function withParams(array $params): self
    {
        return new self($this->api, $this->method, $this->uri, $params, $this->options, $this->attributes);
    }

    public function withOptions(array $options): self
    {
        return new self($this->api, $this->method, $this->uri, $this->params, $options, $this->attributes);
    }

    public function withOption(string $key, mixed $value): self
    {
        $options = $this->options;
        $options[$key] = $value;

        return $this->withOptions($options);
    }

    public function withUri(string $uri): self
    {
        return new self($this->api, $this->method, $uri, $this->params, $this->options, $this->attributes);
    }

    public function withAttribute(string $key, mixed $value): self
    {
        $attributes = $this->attributes;
        $attributes[$key] = $value;

        return new self($this->api, $this->method, $this->uri, $this->params, $this->options, $attributes);
    }

    public function getAttribute(string $key, mixed $default = null): mixed
    {
        return $this->attributes[$key] ?? $default;
    }
}
