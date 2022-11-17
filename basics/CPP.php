<?php

// Property Assignment w/o Constructors:

/*
class Product {
    public $name;
    public $category;
    public $price;
}

$phone01 = new Product;
$phone01->name = 'iPhone 12';
echo ($phone01->name);
$phone02 = new Product;
$phone02->name = 'iPhone 12';
echo ($phone02->name);
*/


// CONSTRUCTOR PROPERTY PROMOTION SYNTAX:

class Product {

    /*
    No Longer Necessary:

    public $name;
    public $category;
    public $price;
    */

    function __construct(
        private $name,
        private $category,
        private $price
        )
        // No Longer Necessary:
    {
        /*
        // $this->name = $name;
        // $this->category = $category;
        // $this->price = $price;
        */
    }

function setName($new)
    {
        $this->name = $new;
        // $this->name = ucfirst($new);
    }

function getName()
    {
        return $this->name;
    }

}


// Method to Assign Properties w/ Constructors:
$phone03 = new Product('iPhone 12', 'Tech', 1000);
$phone04 = new Product('iPhone 12', 'Tech', 1000);

echo $phone03->getName();
echo $phone03->setName('iPhone 13 Mini');
echo $phone03->getName();

?>
