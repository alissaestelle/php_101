<?php

abstract class Shape {

    function __construct(protected $color = 'Blue') {}

    function getColor() 
    {
        return $this->color;
    }

    abstract protected function getArea();
    
}

class Square extends Shape {
    protected $length = 4;

    function getArea() 
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {
    protected $base = 4;
    protected $height = 7;

    function getArea() 
    {
        return 0.5 * $this->base * $this->height;
    }
}

class Circle extends Shape {
    protected $radius = 5;

    function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// $square = (new Square)->getArea();
// var_dump($square);

// $triangle = (new Triangle)->getArea();
// var_dump($triangle);

$test = new Square('Green');
echo $test->getColor();

$circle = new Circle;
echo $circle->getArea();

echo (new Circle)->getArea();

?>