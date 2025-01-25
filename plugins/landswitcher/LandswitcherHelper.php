<?php

declare(strict_types=1);

namespace Plugin\landswitcher;

/**
 * Class TestHelper
 * @package Plugin\jtl_test
 */
abstract class LandswitcherHelper
{
    public static function objectToArray($data)
    {
        if (is_object($data)){
            $data = get_object_vars($data);
        }
        if (is_array($data)) {
            return array_map([self::class, 'objectToArray'], $data);
        }
        return $data;
    }

    public static function filterArray(array $data, string $key)
    {
        return array_map(function ($item) use ($key) {
            return [$key => $item[$key]];
        }, $data);
    }
}
