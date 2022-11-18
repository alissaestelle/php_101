<?php 

interface Provider {
    function authorize();
}

// class User {
//     function __construct(public Provider $provider)
//     {}

//     function login()
//     {
//         return $this->provider->authorize();
//     }
// }

// $alissa = new User(new GitHub);
// var_dump($alissa->login());

class User {
    function __construct(public $name)
    {}

    function login(Provider $provider)
    {
        return $provider->authorize();
    }
}

// Note: PHP supports multiple interface implementation.

class GitHub implements Provider {
    function __construct(public $name)
    {}

    function authorize()
    {
        // var_dump('GitHub User Authorized!');
        return "$this->name User Authorized!";
    }
}

class Twitter implements Provider {
    function __construct(public $name)
    {}

    function authorize()
    {
        // var_dump('GitHub User Authorized!');
        return "$this->name User Authorized!";
    }
}

$alissa = new User('Alissa');
$github = new GitHub('GitHub');
$twitter = new Twitter('Twitter');

// This login() fx accepts interface implemented classes as an argument:
var_dump($alissa->login($github));
var_dump($alissa->login($twitter));


// ABSTRACT COMPARISON

abstract class Service {
    abstract protected function authorize(); 
}

// Note: PHP doesn't support multiple inheritance.

class Facebook extends Service {
    function __construct(protected $name){}
    function authorize()
    {
        return "$this->name User Authorized!";
    }
}

$facebook = new Facebook('Facebook');
var_dump($facebook->authorize());


?>