<?php
echo "Hello world"."<br>";
//variables
// $x=15;
// $y=4;
// $z=$x+$y;
// echo "$z"."<br>";

// constants
// define("con",5);
// echo con."<br>";
// const name="Harish";//const cannot used inside block level
// echo name."<br>";

//checking which datatype
// var_dump($x);
// echo "<br>";

// $a="Hello";
// $$a="World";//Hello = world

//Typecasting
// $p=(string)$x;
// var_dump($p);
// echo "<br>";

//scope
// function myFunction(){
//     global $x,$y,$z;
//     $q=$x+$y+$z;
//     echo "$q"."<br>";
//     static $r=18;
//     $s=5;
//     $r++;
//     $s++;
//     echo $r."<br>";
//     echo $s."<br>";
// }
// myFunction();
// myFunction();
//variable $a is in global scope
//variable $s is in local scope
//variable $r is in static scope

//condition statements
// if($y<5){
//     echo "success"."<br>";
// }

// if($x<10){
//     echo "success"."<br>";
// }else{
//     echo "failure"."<br>";
// }


// switch($y){
//     case 1:{
//         echo "one";
//         break;
//     }
//     case 2:{
//         echo "Two";
//         break;
//     }
//     case 3:{
//         echo "Three";
//         break;
//     }
//     case 4:{
//         echo "four";
//         break;
//     }
//     default:{
//         echo "No match found";
//     }
// }
// echo "<br>";

//loops

// while($y<10){
//     echo "$y ";
//     $y++;
//     if($y==8)break;
// }


// do{ 
//     $y++;
//     if($y==8)continue;
//     echo "$y ";
// }while($y<10);

// for($b=0;$b<$y;$b++){
//     echo "$b";
// }

// $members=array("Harish"=>22,"Kavin"=>24);
// foreach($members as $x=>$y){
//     echo "My name is $x and my age is $y"."<br>";
// }

//Function

// function myPro($name,$age){
//     echo "My name is $name and my age is $age";  //function body
// }
// myPro("Harish",22);                              //function call

// function myName($name="Harish"){
//     echo "My name is $name"."<br>";
// }
// myName("Kavin");
// myName("Sasi Kumar");
// myName();                           //function will take default argument as Harish

// function sum($a,$b){
//     $c=$a+$b;
//     return $c;                     //function return a value to the calling statements
// }

// echo "sum of two number is ".sum(5,4);
// echo "sum of two number is ".sum(2,4);
// echo "sum of two number is ".sum(7,4);

// function ref(&$value){
//     $value+=5;
// }
// $num=2;
// ref($num);
// echo $num;


// function ref1($company,...$name){    //function using rest parameter
//     $len=count($name);
//     for($i=0;$i<$len;$i++){
//         echo "$name[$i] is work in $company"."<br>";
//     }
// }
// ref1("claritytts","Harish","Kavin","Sanjeev");

//Recursion

// function add($a){
//     if($a<5){
//         echo "$a<br>";
//         $a++;
//         add($a);
//     }
    
// }
// add(1);

//String function
// $str="Good Morning";
// echo strlen($str)."<br>";
// echo strrev($str)."<br>";
// echo str_word_count($str)."<br>";
// echo strtolower($str)."<br>";
// echo strtoupper($str)."<br>";
// echo str_replace("Morning","After",$str)."<br>";
// echo strpos("Good Morning","Good")."<br>";

//Array function 
// $arr=array(2,5,6,9,1,4,3);
// echo count($arr);
// echo array_pop($arr);
// echo array_shift($arr);
// array_unshift($arr,0);
// print_r ($arr);
// echo array_push($arr,0);
// print_r ($arr);
