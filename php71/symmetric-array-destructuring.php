<?php

// $book = ['The Title', 'John Doe'];
// // list($title, $author) = $book;

# Symmetric Array Destructuring 1
// [$title, $author] = $book;

// var_dump($title, $author);






// $book = ['title' => 'The Title', 'author' => 'John Doe'];

// # invalid
// // [$pamagat, $mayAkda] = $book;

//  # Symmetric Array Destructuring 2
// ['title' => $pamagat, 'author' => $mayAkda] = $book;

// var_dump($pamagat, $mayAkda);





$books = [
    ['The Title 1', 'John Doe 1'],
    ['The Title 2', 'John Doe 2'],
];
foreach ($books as $book) {
    var_dump($book[0], $book[1]);
}

# Symmetric Array Destructuring 3
// foreach ($books as [$title, $author]) {
//     var_dump($title, $author);
// }
