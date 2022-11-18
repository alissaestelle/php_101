<?php 

namespace Summary;
use Summary\Register;

class Auth {

    // Method Injection
    // This technique uses type-hinting to auto-generate instances of Register when the method is called. No constructor is required for this technique.

    // function register(Register $registration)
    // {
    //     $registration->execute();
    // }

    function __construct(Register $registration){}


    function register()
    {
        $this->registration->execute();
    }
}

?>