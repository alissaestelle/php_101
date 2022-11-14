<?php 

class Cat {

    function __construct(
        public $name,
        public $collection = [])
    {}

    function addToy(Toy $toy)
    {
        $this->collection[] = $toy;
    }

}

class Cafe {

    function __construct(
        protected $name,
        protected $staff = []
        )
    {}

    function getCats()
    {
        return $this->staff;
    }

    function addCat(Cat $cat)
    {
        $this->staff[] = $cat;
        // Without the square brackets, the previous data is overwritten with each new call.
    }
}

class Toy {

    function __construct(protected $name)
    {}

    function setToy($name)
    {
        $this->name = $name;
    }

    function getToy()
    {
        return $this->name;
    }

}

$mittens = new Cat('Mittens');
echo $mittens->name;

$nekocafe = new Cafe('NekoCafe', $nekoStaff = [($mittens)]);
// var_dump($nekocafe->getCats());
print_r($nekocafe->getCats());

$nekocafe->addCat($cheshire = new Cat('Cheshire'));
print_r($nekocafe->getCats());

?>