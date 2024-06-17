<?php

class User
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function age() : int
    {
        return $this->age;
    }

    # nullable
    // public function age() : ?int
    // {
    //     return $this->age;
    // }

    # void
    // public function age() : void
    // {
    //     echo $this->age;
    // }
}

$age = (new User(10))->age();

var_dump($age);
