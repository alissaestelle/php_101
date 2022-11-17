<?php 

class Math {

    static function add(...$array)
    {
        return array_sum($array);
    }

}

echo Math::add(1, 2, 3, 4);

// $sum = new Math;
// echo ($sum->add(1, 2, 3, 4))

// Alternate Method:

/*

class Math {

    function add($array)
    {
        return array_sum($array);
    }

}

$sum = new Math;
echo ($sum->add($numbers = [1, 2, 3, 4]))

*/

?>