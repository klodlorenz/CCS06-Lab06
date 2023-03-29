<?php
$fullname = $argv[1];


$birthday = $argv[2];


$year = date("Y");


$age = $year - $birthday;


echo "Your name is $fullname, and your age is $age years old\n";


if ($age >= 18) {


echo "You are a voter\n";


}






if ($age >= 60) {


echo "You are a senior citizen\n";


}


?>
