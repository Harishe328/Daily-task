<?php
abstract class A{
    abstract public function name($name);
}
class B extends A{
    public function name($name){
        echo "Hi $name welcome to class B.<br>";
    } 
}
class C extends A{
    public function name($name){
        echo "Hi $name welcome to class C";
    } 
}
$b=new B();
$b->name("Harish");
$c=new C();
$c->name("Harish");
?>