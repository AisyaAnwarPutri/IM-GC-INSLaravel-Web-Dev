<?php

require './animal.php';
require './ape.php';
require './frog.php';

$sheep = new Animal("Name : Shaun");

echo $sheep->name . '<br>'; // "Shaun"
echo $sheep->legs . '<br>'; // 4
echo $sheep->cold_blooded() . '<br><br>'; // false

$sungokong = new ape("Name : Buduk");
echo $sungokong->name . '<br>'; // "kera sakti"
echo $sungokong->legs . '<br>'; // 4
echo $sungokong->cold_blooded() . '<br>'; // false
echo $sungokong->jump() . '<br><br>'; // "Auooo"

$kodok = new frog("Name : Kera sakti");
echo $kodok->name . '<br>'; // "buduk"
echo $kodok->legs . '<br>'; // 2
echo $sungokong->cold_blooded() . '<br>'; // false
echo $kodok->Yell(); // "hop hop"