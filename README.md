# 巨量广告 PHP SDK

[![Latest Version](https://img.shields.io/packagist/v/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)
[![PHP Version](https://img.shields.io/packagist/php-v/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)
[![License](https://img.shields.io/packagist/l/jiangwang/ad-ocean-sdk.svg)](https://packagist.org/packages/jiangwang/ad-ocean-sdk)

一个用于巨量广告（OceanEngine）API的PHP SDK。

## 功能特性

- 🚀 **完整的API覆盖** - 支持巨量广告的所有开放API
- 🎯 **类型安全** - 完整的参数和响应类型定义
- 🔧 **灵活配置** - 支持自定义请求拦截器和配置
- 🧩 **易于扩展** - 支持自定义API和参数类
- ⭐ **动态属性** - 自动处理API返回的额外字段，无需修改Data类

## 环境要求

- PHP >= 8.1
- Composer
- GuzzleHttp 7.5+

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

// 初始化SDK
$app = Application::init();

// 设置Access Token
$app->client()->setAccessToken('your-access-token');

// 调用API - 获取广告主信息
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

### 使用数组参数

```php
// 也可以直接传入数组
$response = $app->apis()->openAdvertiserInfoGetApi([
    'advertiser_id' => 123456
]);
```

### 自定义请求拦截器

```php
use AdOceanSdk\RequestClientInterceptor;

class MyInterceptor extends RequestClientInterceptor
{
    public function response($response, $requestApi, $requestParams, $options)
    {
        // 在这里可以处理响应数据
        echo "API调用: " . $requestApi->getAddress() . "\n";
        return parent::response($response, $requestApi, $requestParams, $options);
    }
}

$app = Application::init();
$app->client()
    ->setInterceptor(new MyInterceptor())
    ->setAccessToken('your-access-token');
```

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
    
    public function call($params = [])
    {
        $response = parent::call($params);
        return CustomResponse::from($response->toArray());
    }
}

class CustomParams extends RequestParams
{
    public int $custom_param;
}

// 使用自定义API
$app = Application::init();
$response = $app->client()->call(new CustomApi(), CustomParams::from([
    'custom_param' => 123
]));
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