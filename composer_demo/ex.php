<?php 

// require 'src/Person.php';
// require 'src/Business.php';
// require 'src/Staff.php';

use Demo\Business;
use Demo\Users\Person;
use Demo\Staff;


$dyel = new Demo\Users\Person('Dyel');
$kimmelStaff = new Demo\Staff([$dyel]);
$kimmel = new Demo\Business($kimmelStaff);
$kimmel->hire($alissa = new Demo\Users\Person('Alissa'));

var_dump($kimmel->getStaff());

?>