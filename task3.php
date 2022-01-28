<?php

/**
 * Return next binary number as an array.
 *
 * @param array $input
 * @return array
 */
function next_binary_number(array $input): array
{
    $reminder = 0;
    for ($i = count($input) - 1; $i >= 0; $i--) {
        $digit = $i < count($input) - 1 ? 0 : 1;
        $sum = $reminder + $input[$i] + $digit;
        $reminder = (int)($sum / 2);
        $input[$i] = (int)$sum % 2;
    }

    if ($reminder) {
        unshift($input, $reminder);
    }

    return $input;
}

/**
 * Add element at first of an array.
 *
 * @param array $input
 * @param int $element
 * @return void
 */
function unshift(array &$input, int $element): void
{
    $output = [$element];
    foreach ($input as $value) {
        $output[] = $value;
    }

    $input = $output;
}