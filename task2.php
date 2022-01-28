<?php

/**
 * Return input string without vowels,
 * lowercase except first letter.
 *
 * @param string $input
 * @return string
 */
function reformat(string $input): string
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    return ucfirst(str_ireplace($vowels, '', strtolower($input)));
}