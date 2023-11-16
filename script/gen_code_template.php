<?php
$json           = file_get_contents('../doc.json');
$docData        = json_decode($json, true);
$requestParams  = $docData['request_params'];
$responseParams = $docData['response_params'];

if (isset($argv[1])) {
    $classInput = $argv[1];
} else {
    die("Please provide the class input as a command line argument.\n");
}

$classInput     = $classInput . ucfirst(strtolower($docData['request_method']));
$classPaths     = explode('/', $classInput);
$classPrefix    = array_pop($classPaths);
$classNameSpace = 'AdOceanSdk\\' . implode('\\', $classPaths);

generateParamClass($classNameSpace, $classPrefix, $requestParams);
generateResponseClass($classNameSpace, $classPrefix, $responseParams);
generateApiClass($classNameSpace, $classPrefix, $docData);
function generateApiClass(string $classNameSpace, string $classPrefix, array $data): void
{
    $className     = $classPrefix . 'Api';
    $namespace     = "{$classNameSpace}\\Api";
    $parentClass   = 'RequestApi';
    $responseClass = "\\{$classNameSpace}\\Response\\{$classPrefix}Response";
    $method        = $data['request_method'];
    $paramsClass   = "\\{$classNameSpace}\\Params\\{$classPrefix}Params";
    $address       = ltrim(preg_replace('/^https?:\/\/[^\/]+/', '', $data['request_url']), '/');

    $code = <<<CODE
<?php

namespace $namespace;

use AdOceanSdk\Kernel\Interface\RequestParamInterface;
use AdOceanSdk\RequestApi;
use AdOceanSdk\RequestMethodEnum;

/**
 * @desc {$data['request_title']}
 * @doc  {$data['request_doc']}
 */
class $className extends $parentClass
{
    protected string \$address = '$address';

    protected RequestMethodEnum \$method = RequestMethodEnum::$method;

    public function call($paramsClass|RequestParamInterface|array \$params = []): $responseClass
    {
        \$response = parent::call(\$params);

        return $responseClass::from(\$response->toArray());
    }
}
CODE;

    generateFile(generatePath("{$classNameSpace}/Api/{$classPrefix}Api.php"), $code);
}

function generateResponseClass(string $classNameSpace, string $classPrefix, array $params): void
{
    $data['data'] = $params['data'];
    $returnType   = "\\{$classNameSpace}\\Data\\{$classPrefix}ResponseData";

    $fields = generateFields($classNameSpace, $classPrefix . 'Response', $data);

    if (in_array($params['data']['type'], ['list', 'object[]', 'json[]'])) {
        $docType    = $returnType;
        $returnType = generatePhpType($data['data']['type']);
        $fields     .= <<<FIELDS

    /**
     * @return array<{$docType}>
     */
FIELDS;
    }
    $code = <<<CODE
<?php

declare(strict_types=1);

namespace {$classNameSpace}\\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class {$classPrefix}Response extends Data implements ResponseInterface
{
    use ResponseTrait;

{$fields}
    public function getData(): {$returnType}
    {
        return \$this->data;
    }
}
CODE;

    generateFile(generatePath("{$classNameSpace}/Response/{$classPrefix}Response.php"), $code);
}

function generateParamClass(string $classNameSpace, string $classPrefix, array $params): void
{
    $fields = generateFields($classNameSpace, $classPrefix . 'Param', $params);

    $code = <<<CODE
<?php

declare(strict_types=1);

namespace {$classNameSpace}\\Params;

use AdOceanSdk\\RequestParams;

class {$classPrefix}Params extends RequestParams
{
{$fields}
}
CODE;

    generateFile(generatePath("{$classNameSpace}/Params/{$classPrefix}Params.php"), $code);
}

function generatePath(string $path): string
{
    return str_replace(['AdOceanSdk/', '\\'], ['../src/', '/'], $path);
}

function generateFile(string $path, string $content): void
{
    $path      = str_replace("AdOceanSdk/", '../src/', $path);
    $directory = dirname($path);

    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }

    echo "生成:" . $path . "\n";
    file_put_contents($path, $content);
}

function generateFields(string $classNameSpace, string $classPrefix, array $params): string
{
    $code = "";
    foreach ($params as $key => $param) {
        $varType = generatePhpType($param['type']);
        $docType = $varType;
        $annot   = '';

        if ($key === 'page_info') {
            $code .= <<<CODE
    /**
     * @var \AdOceanSdk\ResponsePageInfoData \${$key} 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData \${$key};
    
CODE;
            continue;
        }

        if (in_array($param['type'], ['string[]', 'number[]'])) {
            $tipType = generatePhpType(rtrim($param['type'], '[]'));
            $docType = "array<{$tipType}>";
        }

        if (!empty($param['children'])) {
            if ((int)$param['level'] === 0 && $key === 'data') {
                $typeClass = "\\$classNameSpace\\Data\\" . "{$classPrefix}" . toCamelCase($key);
            } else {
                $typeClass = "\\$classNameSpace\\Data\\" . "{$classPrefix}" . toCamelCase($key) . 'Data';
            }
            $docType = $typeClass;

            if ($varType === 'array') {
                $annot   = "#[\ClassTransformer\Attributes\ConvertArray({$typeClass}::class)]";
                $docType = "array<{$typeClass}>";
            } else {
                $varType = $typeClass;
            }
            if ((int)$param['level'] === 0 && $key === 'data') {
                generateDataClass($classNameSpace, $classPrefix, $param['children'], $param['description']);
            } else {
                generateDataClass($classNameSpace, $classPrefix . toCamelCase($key), $param['children'], $param['description']);
            }
        }
        if ($annot) {
            $code .= <<<CODE

    /**
     * @var $docType \${$key} {$param['description']}
     */
    $annot
    public {$varType} \${$key};
    
CODE;
        } else {
            $code .= <<<CODE

    /**
     * @var $docType \${$key} {$param['description']}
     */
    public {$varType} \${$key};
    
CODE;
        }

    }

    return $code;
}

function generateDataClass(string $classNameSpace, string $classPrefix, array $params, string $desc = ''): void
{
    $fields = generateFields($classNameSpace, $classPrefix, $params);

    $code = <<<CODE
<?php

declare(strict_types=1);

namespace {$classNameSpace}\\Data;

use AdOceanSdk\\Kernel\\Data\\Data;

// {$desc}
class {$classPrefix}Data extends Data
{
{$fields}
}
CODE;

    $savePath = str_replace('\\', '/', "{$classNameSpace}/Data/{$classPrefix}Data.php");

    generateFile($savePath, $code);
}

function toCamelCase(string $str): string
{
    return str_replace('_', '', ucwords($str, '_'));
}

function generatePhpType(string $type): string
{
    if (str_ends_with($type, '[]')) {
        return 'array';
    }
    $typeMapping = [
        'list'     => 'array',
        'number'   => 'int',
        'object[]' => 'array',
    ];

    return $typeMapping[$type] ?? $type;
}