<?php
$arr=array("a"=>"Apple","b"=>"Banana","c"=>"Orange","d"=>"Pinenaple");
print_r(array_change_key_case($arr,CASE_UPPER));
echo "<br>";
print_r(array_chunk($arr,2));
echo "<br>";
$name=array("Harish","Kavin","Sanjeev");
$age=array(22,23,22);
print_r(array_combine($name,$age));
echo "<br>";
print_r(array_count_values($age));
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
print_r(array_diff($a1,$a2));
echo "<br>";
print_r(array_keys($arr));
echo "<br>";
print_r(array_sum($age));
echo "<br>";
print_r(count($arr));
echo "<br>";
print_r(sizeof($name));
echo "<br>";
print_r(array_merge($arr,$name));
echo "<br>";
print_r(array_pad($name,-4,"Sugathan"))
?>