<?php 

class Mother {

    public function getEyeColor()
    {
        return "Green";
    }

}

class Child extends Mother {
    // The extends keyword "extends" the functionality of the Mother class to the Child class, so methods created in the Mother class can be accessed by the Child class as well.
    public $name;
}

$livvy = (new Child("Livvy"))->getEyeColor();
var_dump($livvy)

?>