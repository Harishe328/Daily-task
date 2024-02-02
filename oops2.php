<?php
require "oops.php";
$a = new Fruit("Apple", 2, "red");
echo $a->getName() . "<br>";
echo $a->getWeight() . "<br>";
//  $a->$name="Banana" //because $name is in private we cannot access outside the class
$merchant = new Merchant("Orange", 3, "orange");
