<?php

$lessThanZero = [-3, -2, -1];
$greaterThanZero = [1, 2, 3];
// Expect Output: -3 -2 -1 0 1 2 3

$numbers = array_merge($lessThanZero, [0], $greaterThanZero);

# Spread Operator within arrays
// $numbers = [...$lessThanZero, 0, ... $greaterThanZero];

# Caveat
// $numbers = [...['zero' => 0], 1, 2, ...[3, 4], 5, ...[6, 7]];

var_dump($numbers);
