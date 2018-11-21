<?php

namespace Lambdish\Phunctional;

use Generator;
use Traversable;

/**
 * Returns an array with the items in $coll for which $fn returns true.
 *
 * Similar to `array_filter` but with a consistent parameters order, requiring always a function, and
 * returning a new array with keys that start at 0.
 *
 * @since 1.0
 *
 * @param callable                    $fn   function to filter by
 * @param array|Traversable|Generator $coll collection of values to be filtered
 *
 * @return array
 */
function filter_fresh(callable $fn, $coll)
{
    $result = [];
    $iterator = 0;

    foreach ($coll as $key => $value) {
        if ($fn($value)) {
            $result[$iterator] = $value;
            $iterator++;
        }
    }

    return $result;
}