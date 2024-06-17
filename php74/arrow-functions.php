<?php

require 'vendor/autoload.php';

class Movie
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

$movies = collect([
    new Movie('spiderman'),
    new Movie('antman')
]);

// $movies = $movies->map(function ($movie) {
//     return ucfirst($movie->title);
// });

# Arrow function 1
// $movies = $movies->map(fn ($movie) => ucfirst($movie->title));
// var_dump($movies);




// $search = 'spiderman';

// $filtered = $movies->filter(function ($movie, $index) use($search) {
//     return $movie->title === $search;
// });

# Arrow function 2
// $filtered = $movies->filter(fn($movie, $index) => $movie->title === $search);

// var_dump($filtered->all());
