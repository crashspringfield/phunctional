<?php

namespace Akamon\Phunctional;

use Generator;
use Traversable;

/**
 * @param callable                    $fn   function to check if the predicate is true
 * @param array|Traversable|Generator $coll collection of values to check some is true by the `$fn`
 *
 * @since 0.1
 *
 * @return bool
 */
function some(callable $fn, $coll)
{
    foreach ($coll as $value) {
        if ($fn($value)) {
            return true;
        }
    }

    return false;
}
