<?php

namespace App\classes;

class HelloWorld
{
    public $x, $y, $arr;

    public function __construct()
    {
        $this->x = 1;
        $this->y = 20;
        
        $this->arr = array(
            0 => 'der Korper - body',
            1 => 'der Kopf - Head'
        );
      
    }

    public function index()
    {
        // for( $this->x;  $this->x <= $this->y; $this->x++)
        // {
        //     echo  $this->x . '<br>';
        // }

        // while($this->x <= $this->y)
        // {
        //     echo  $this->x . '<br>';
        //     $this->x++;
        // }

        print_r($this->arr);
        echo '<br>'; echo '<br>'; echo '<br>'; echo '<br>';
        var_dump ($this->arr);

    }
}
