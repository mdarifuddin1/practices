<?php

namespace App\HelloWorld;

class HelloWorld
{
    public $name;

    public function __construct()
    {
        $this->name = 'Foysal';
    }

    public function index()
    {
        echo $this->name;
    }
}