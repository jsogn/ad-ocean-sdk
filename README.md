### 使用示例

#### 简单使用
```php
$app = \AdOceanSdk\Application::init();
$app->client()
    ->setInterceptor(new \AdOceanSdk\RequestClientInterceptor()) //可以继承，拦截响应
    ->setAccessToken('你的token');
// 调用API
$response = $app->apis()->openAdvertiserAvatarGetApi(\AdOceanSdk\Advertiser\Params\AdvertiserAvatarGetParams::from([])); //也可以直接传入数组
// 获取数据
$response->getData();
// 获取数组
$response->getData()->toArray();
```

#### 自定义API

```php
$app = \AdOceanSdk\Application::init();

class CustomApi extends \AdOceanSdk\RequestApi {}

class CustomParams extends  \AdOceanSdk\RequestParams {}

// 传入自定义的API类和方法类
$app->client()->call(new CustomApi(), new CustomParams::from([]));
// 也可以通过API类直接调用
(new CustomApi())->call([]);
```