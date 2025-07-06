<?php

use Illuminate\Support\Str;

if (!function_exists('array_keys_to_snake_case')) {
    function array_keys_to_snake_case(array $array): array
    {
        if (blank($array)) {
            return [];
        }

        return collect($array)
            ->mapWithKeys(function ($value, $key) {
                $snakeKey = Str::snake($key);
                if (is_array($value)) {
                    $value = array_keys_to_snake_case($value);
                }
                return [$snakeKey => $value];
            })
            ->toArray();
    }
}
