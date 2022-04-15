<?php

//parent
abstract class Fruit{

    protected $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function name();

}

//child 
class Banana extends Fruit{

    public function name(){
        return 'this is banana.';
    }

}

//child
class Apple extends Fruit{

    public function name(){
        return 'this is apple.';
    }

}

$fruit = new Banana('yellow');
var_dump($fruit);

$fruit = new Apple('red');
var_dump($fruit);

// $fruit = new Fruit();
// var_dump($fruit->name());

?>