<?php 

use Demo\Business;
use Demo\Users\Person;
use Demo\Staff;


$dyel = new Person('Dyel');
$kimmelStaff = new Staff([$dyel]);
$kimmel = new Business($kimmelStaff);
$kimmel->hire($alissa = new Person('Alissa'));

var_dump($kimmel->getStaff());

?>