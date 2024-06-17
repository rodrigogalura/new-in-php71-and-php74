<?php

function dumpAll(iterable $items) {
    foreach ($items as $item) {
        var_dump($item);
    }
}

class Collection implements IteratorAggregate
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}

$collection = new Collection([1, 2, 3]);
dumpAll($collection);
