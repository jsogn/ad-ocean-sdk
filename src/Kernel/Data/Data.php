<?php

namespace AdOceanSdk\Kernel\Data;

use ClassTransformer\Hydrator;

abstract class Data implements DataInterface
{
    public static function from(array $data): static
    {
        return Hydrator::init()->create(static::class, $data);
    }

    public static function collection(array $data): array
    {
        return Hydrator::init()->createCollection(static::class, $data);
    }

    private static function snakeToCamelCase(string $input): string
    {
        return lcfirst(str_replace('_', '', ucwords($input, '_')));
    }

    private static function camelToSnakeCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function toArray(): array
    {
        $properties = get_object_vars($this);
        $array      = [];

        foreach ($properties as $key => $value) {
            if ($value instanceof Data) {
                $array[$key] = $value->toArray();
            } else {
                $array[$key] = $value;
            }
        }

        return $array;
    }

}