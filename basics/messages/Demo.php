<?php

class Cat {
    function __construct(public $name){}
}

class Staff {
    function __construct(protected $cats = []){}
    
    function getCats()
    {
        return $this->cats;
    }

    function add(Cat $cat)
    // Type Hinting Example: Prefixing the "Cat" class name to the $cat parameter indicates that the expected argument should be an instance of the Cat object.
    {
        $this->cats[] = $cat;
    }
}


class Cafe {
    function __construct(
        protected $name, 
        protected Staff $staff
        ){}

    function getStaff()
    {
        return $this->staff->getCats();
    }

    function hire(Cat $cat)
    {
        $this->staff->add($cat);
    }
}

$mittens = new Cat('Mittens');
var_dump($mittens);

$neko = new Cafe('Nekocafe', $staff = new Staff([$mittens]));
var_dump($neko);

$neko->hire($cheshire = new Cat('Cheshire'));
var_dump($neko->getStaff())

?>