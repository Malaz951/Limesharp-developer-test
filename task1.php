<?php

/**
 * Repeated input array elements x times
 * and return the result as an array.
 *
 * @param array $input
 * @param int $times
 * @return array
 */
function repeat(array $input, int $times = 3): array
{
    $output = $input;
    for ($i = 1; $i < $times; $i++) {
        $output = array_merge($output, $input);
    }

    return $output;
}