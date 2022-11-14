<?php 

namespace Demo;
use Demo\Users\Person;

class Business {

    function __construct(
        protected Staff $staff
        )
    {}

    function hire(Person $person)
    {
        $this->staff->add($person);
    }

    function getStaff()
    {
        return $this->staff->getMembers();
    }
}

?>