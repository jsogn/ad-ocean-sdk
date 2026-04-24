# 巨量广告 PHP SDK

[![Latest Version](https://img.shields.io/packagist/v/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)
[![PHP Version](https://img.shields.io/packagist/php-v/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)
[![License](https://img.shields.io/packagist/l/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)

一个用于巨量广告（OceanEngine）开放 API 的 PHP SDK。

## 功能特性

- 🚀 完整的开放 API 封装，提供参数类、响应类与 OpenApi 调度入口
- 🎯 类型安全，支持数组与参数对象两种调用方式
- 🔧 可插拔 RequestClient，支持注入自定义 Guzzle Client、HandlerStack、代理、证书等能力
- 🧩 Promise 化 middleware pipeline，`call()` 与 `callAsync()` 共用同一套中间件链
- 🌐 提供正式 direct HTTP 入口：`request()` / `get()` / `post()` / `put()` / `patch()` / `delete()`
- ⚡ 支持批量并发调用 `callBatch()`，并限制并发上限
- ⭐ 动态属性支持，API 返回中的额外字段无需修改 Data 类也可访问

## 环境要求

- PHP >= 8.1
- Composer
- GuzzleHttp 7.x

## 安装

使用 Composer 安装：

```bash
composer require jiangwang/ad-ocean-sdk
```

## 快速开始

### 基本使用

```php
<?php
require 'vendor/autoload.php';

use AdOceanSdk\Application;
use AdOceanSdk\Advertiser\Params\AdvertiserInfoGetParams;

// 初始化 SDK
$app = Application::init();

// 设置 Access Token（单账号场景最简单）
$app->client()->setAccessToken('your-access-token');

// 调用 API - 获取广告主信息
$response = $app->apis()->openAdvertiserInfoGetApi(
    AdvertiserInfoGetParams::from(['advertiser_id' => 123456])
);

// 获取响应数据
$advertiserInfo = $response->getData();
echo $advertiserInfo->toArray();

// 访问API返回的额外字段（即使未在Data类中定义）
if (isset($advertiserInfo->extra_field)) {
    echo $advertiserInfo->extra_field;
}
```

### 配置化初始化

```php
use AdOceanSdk\Application;
use AdOceanSdk\SdkConfig;

$config = SdkConfig::make()
    ->setDomain('https://api.oceanengine.com/')
    ->setTimeout(30)
    ->setAccessToken('your-access-token')
    ->addHeader('X-Trace-Id', 'trace-demo');

$app = Application::init(config: $config);
```

### 注入自定义 RequestClient

如果你希望完全掌控 HTTP 行为，可以自己实现 `RequestClientInterface`，或者直接继承默认 `RequestClient`：

```php
use AdOceanSdk\Application;
use AdOceanSdk\RequestClient;

final class OceanRequestClient extends RequestClient
{
}

$app = Application::init(OceanRequestClient::make());
```

`Application::init()` 现在接收 `RequestClientInterface`，因此可以安全注入自定义 client 实现。

### 注入自定义 Guzzle Client

如果你只想接管底层 Guzzle 能力，而不重写整个 `RequestClient`，推荐这样做：

```php
use AdOceanSdk\Application;
use AdOceanSdk\SdkConfig;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;

$stack = HandlerStack::create();

$httpClient = new Client([
    'base_uri' => 'https://api.oceanengine.com/',
    'timeout' => 20,
    'handler' => $stack,
]);

$config = SdkConfig::make()
    ->setHttpClient($httpClient)
    ->setAccessToken('your-access-token');

$app = Application::init(config: $config);
```

说明：

- `setHttpClient()` 适合接入你已经组装好的 `HandlerStack`、代理、证书、cookies、debug 等能力。
- `setHeaders()` / `addHeader()` / `setAccessToken()` 不会重建底层 Guzzle Client，因此不会破坏连接池。

### 使用数组参数

```php
// 也可以直接传入数组
$response = $app->apis()->openAdvertiserInfoGetApi([
    'advertiser_id' => 123456
]);
```

### Middleware 中间件

```php
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use GuzzleHttp\Promise\PromiseInterface;

final class TraceMiddleware implements MiddlewareInterface
{
    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        $headers = $context->options['headers'] ?? [];
        $headers['X-Trace-Id'] = uniqid('trace_', true);

        return $next($context->withOption('headers', $headers));
    }
}

$client = Application::init()->client();
$client->addMiddleware(new TraceMiddleware());
```

说明：

- 中间件接口为 `MiddlewareInterface::process(RequestContext $context, callable $next): PromiseInterface`
- 可在调用前修改 `context`，也可在 `then()` / `otherwise()` 中处理响应、重试、鉴权刷新等逻辑
- `call()` / `callAsync()` / `request()` / `requestAsync()` 共用同一条 middleware pipeline

### 多账号场景：按参数动态注入 Token

如果你像业务项目里那样，需要根据不同用户或不同 `advertiser_id` 注入不同 token，推荐使用中间件，而不是在共享 client 上频繁切换全局 token。

```php
use AdOceanSdk\Kernel\Middleware\MiddlewareInterface;
use AdOceanSdk\Kernel\Middleware\RequestContext;
use GuzzleHttp\Promise\PromiseInterface;

final class AccessTokenMiddleware implements MiddlewareInterface
{
    public function process(RequestContext $context, callable $next): PromiseInterface
    {
        $headers = $context->options['headers'] ?? [];
        $advertiserId = $context->params['advertiser_id'] ?? null;

        if ($advertiserId !== null) {
            $headers['Access-Token'] = $this->resolveTokenByAdvertiserId((int) $advertiserId);
        }

        return $next($context->withOption('headers', $headers));
    }

    private function resolveTokenByAdvertiserId(int $advertiserId): string
    {
        // 从缓存/数据库中读取当前 advertiser 对应的 token
        return 'resolved-token';
    }
}

$config = \AdOceanSdk\SdkConfig::make()
    ->setHttpClient(new \GuzzleHttp\Client(['base_uri' => 'https://api.oceanengine.com/']))
    ->addMiddleware(new AccessTokenMiddleware());

$app = \AdOceanSdk\Application::init(config: $config);
```

这种方式的好处是：

- 请求级别注入 token，不污染共享 client 的全局状态
- 更适合多账号、多租户或 worker 常驻进程场景
- 不会因为切换 token 反复销毁底层 Guzzle 连接池

### 内置中间件能力

`SdkConfig` 提供了几种常用中间件装配入口：

```php
$config = SdkConfig::make()
    ->setAccessToken('your-access-token')
    ->setThrowOnApiError()
    ->setRetryPolicy(maxAttempts: 3, baseDelayMs: 200, maxDelayMs: 5000)
    ->setOAuthTokenProvider(
        tokenGetter: fn () => 'current-token',
        tokenRefresher: fn () => 'new-token',
    );
```

包含：

- `setThrowOnApiError()`：业务返回码非成功时抛异常
- `setRetryPolicy()`：网络异常或限流异常时自动重试
- `setOAuthTokenProvider()`：鉴权失败时自动刷新 token 并重试一次

### 异步与批量调用

```php
use AdOceanSdk\Advertiser\Params\AdvertiserInfoGetParams;

$promise = $app->client()->callAsync(
    'AdOceanSdk\\Advertiser\\Api\\AdvertiserInfoGetApi',
    AdvertiserInfoGetParams::from(['advertiser_id' => 123456])
);

$response = $promise->wait();

$results = $app->client()->callBatch([
    'a' => ['AdOceanSdk\\Advertiser\\Api\\AdvertiserInfoGetApi', ['advertiser_id' => 1]],
    'b' => ['AdOceanSdk\\Advertiser\\Api\\AdvertiserInfoGetApi', ['advertiser_id' => 2]],
], concurrency: 5);
```

说明：

- `callAsync()` 与同步 `call()` 使用完全一致的 middleware 链
- `callBatch()` 返回值会保留输入键名
- `callBatch()` 中单个请求失败不会中断其他请求，失败项会返回对应异常对象

### 直接 HTTP 请求

当你还没有生成 `RequestApi` 类，但又希望继续复用 SDK 的 middleware、token 注入、重试、异常包装与响应解码时，可以直接使用 `RequestClient` 的 HTTP 入口。

```php
use AdOceanSdk\RequestFormatEnum;
use AdOceanSdk\RequestMethodEnum;

$client = $app->client();

// GET / DELETE 默认按 QUERY 发送参数
$client->get('open_api/2/advertiser/info/', [
    'advertiser_id' => 123456,
]);

$client->delete('open_api/2/tools/item/', [
    'id' => 7,
]);

// POST / PUT / PATCH 默认按 JSON 发送参数
$client->post('open_api/2/tools/bind/', [
    'advertiser_id' => 123456,
    'name' => 'demo',
]);

// 也可以显式指定 method / format / headers / timeout / domain
$client->request(
    RequestMethodEnum::PATCH,
    'open_api/2/tools/item/',
    ['status' => 'paused'],
    RequestFormatEnum::FORM_PARAMS,
    ['X-Trace-Id' => 'trace-001'],
    timeout: 10,
    domain: 'https://api.oceanengine.com/'
);
```

说明：

- `request()` / `requestAsync()` 依然会经过 SDK pipeline，而不是绕过到裸 Guzzle。
- 默认参数格式为：`GET` / `DELETE` / `HEAD` / `OPTIONS` 使用 `QUERY`，`POST` / `PUT` / `PATCH` 使用 `JSON`。
- 若你需要复用频率高、结构稳定、希望获得参数类与响应类的类型能力，仍然优先推荐定义 `RequestApi`。

## 自定义API

如果需要调用新的API或自定义API，可以继承基础类：

```php
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestParams;
use AdOceanSdk\RequestMethodEnum;

class CustomApi extends RequestApi
{
    protected string $address = 'open_api/2/custom/api/';
    protected RequestMethodEnum $method = RequestMethodEnum::GET;
}

class CustomParams extends RequestParams
{
    public int $custom_param;
}

// 方式一：直接通过 client 调用
$app = Application::init();
$response = $app->client()->call(new CustomApi(), CustomParams::from([
    'custom_param' => 123
]));

// 方式二：注册到 OpenApi 调度器
$app->registerApi('customApi', CustomApi::class);
$response = $app->apis()->customApi([
    'custom_param' => 123,
]);
```

建议：

- 一次性、灰度期、未生成代码的新接口：优先使用 `request()` / `get()` / `post()`。
- 长期维护、重复调用、需要类型化参数和响应：定义 `RequestApi` 并注册到 `OpenApi`。

## 异常说明

常见异常包括：

- `AdOceanSdk\Kernel\Exceptions\ApiResponseException`：业务返回码异常
- `AdOceanSdk\Kernel\Exceptions\AuthException`：鉴权失败
- `AdOceanSdk\Kernel\Exceptions\RateLimitException`：接口限流
- `AdOceanSdk\Kernel\Exceptions\NetworkException`：网络异常或底层请求失败
- `AdOceanSdk\Kernel\Exceptions\MalformedResponseException`：返回内容不是合法 JSON 或结构不符合预期

建议在业务项目中统一捕获 SDK 异常并转成你的应用层错误。

## 测试

```bash
vendor/bin/phpunit tests/
```

## 贡献指南

欢迎提交Issue和Pull Request来改善这个项目。

1. Fork 项目
2. 创建特性分支 (`git checkout -b feature/amazing-feature`)
3. 提交改动 (`git commit -m 'Add amazing feature'`)
4. 推送到分支 (`git push origin feature/amazing-feature`)
5. 创建 Pull Request

## 许可证

本项目使用 MIT 许可证。详情请参阅 [LICENSE](LICENSE) 文件。

## 相关链接

- [巨量广告开放平台](https://open.oceanengine.com/)
- [API文档](https://open.oceanengine.com/labels/7)
- [Packagist](https://packagist.org/packages/jiangwang/ad-ocean-sdk)
