<?php

$user = [
    'name' => [
        // 'fname' => 'John',
        'lname' => 'Doe',
    ]
];

$user['name']['fname'] = isset($user['name']['fname']) ? $user['name']['fname'] : 'Foo';

# Coalescing Operator (php7.0+)
// $user['name']['fname'] = $user['name']['fname'] ?? 'Foo';

# Coalescing Assignment Operator
// $user['name']['fname'] ??= 'Foo';

var_dump($user['name']['fname']);
