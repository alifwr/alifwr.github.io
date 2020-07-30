<?php
//Release 0
/*
require_once ('animal.php');

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded // false
*/

//Release 1
require_once ('Frog.php');
require_once ('Ape.php');

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
?>