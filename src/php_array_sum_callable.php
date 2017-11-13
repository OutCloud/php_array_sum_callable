<?php

use OutCloud\Exception\NotANumberException;

/**
 * @param array    $items
 * @param callable $func
 *
 * @return int|string
 * @throws NotANumberException
 */
function array_sum_callable(array $items, callable $func)
{
    $sum = 0;
    foreach ($items as $item) {
        $value = $func($item);
        if(!is_numeric($value)){
            throw new NotANumberException();
        }
        $sum += $value;
    }

    return $sum;
}