<?php 

namespace Demo;
use Demo\Users\Person;

class Staff {

    function __construct(protected $members = [])
    {}

    function getMembers()
    {
        return $this->members;
    }

    function add(Person $person)
    {
        $this->members[] = $person;
    }

}

?>