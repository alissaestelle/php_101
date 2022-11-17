<?php

class Cat {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Staff {
    protected $cats = [];

    public function __construct($cats = [])
    {
        $this->cats = $cats;
    }

    public function getCats()
    {
        return $this->cats;
    }

    public function add(Cat $cat)
    // Type Hinting Example: Prefixing the "Cat" class name to the $cat parameter indicates that the expected argument should be an instance of the Cat object.
    {
        $this->cats[] = $cat;
    }
}


class Cafe {
    protected $name;
    protected $staff;

    public function __construct($name, Staff $staff)
    {
        $this->name = $name;
        $this->staff = $staff;
    }

    public function getStaff()
    {
        return $this->staff->getCats();
    }

    public function hire(Cat $cat)
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