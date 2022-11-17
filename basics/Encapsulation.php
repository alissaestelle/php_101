<?php

// Getters & Setters

/*
Setters serve as protective filters for code. Whenever implementing a setter fx, the convention is to prefix the word "set" to the name of the fx.
Ex: setExample()
*/

class Person {

    private $name;
    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    // setAge(): setter example that limits the user age group to only those older than 18
    {
        if ($age < 18) {
            // throw new Exception('Access Denied');
            echo nl2br("Access Denied \n");
        } else {
            $this->age = $age;
        }
    }

    public function getAge() {
        return $this->age * 365;
    }
}

$alissa = new Person('Alissa Wiley');
// $alissa->age = 33;
$alissa->setAge(33);
var_dump($alissa->getAge());
// var_dump($alissa->name);

$livvy = new Person('Liv Wiley');
$livvy->setAge(4);
var_dump($livvy)

// Encapsulation

/*
Private & Protected Modifiers

1. Private properties/methods enforce restrictions to access & modify specific information.
2. Protected properties/methods work the same way, only they can be extended to sub-classes (private cannot).

Private & protected keywords are examples of encapsulation.
*/

?>