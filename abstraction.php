<?php
abstract class Abstruct1
{
    abstract public function name($name);
}
class Abstruct2 extends Abstruct1
{
    public function name($name)
    {
        echo "Hi $name welcome to class B.<br>";
    }
}
class Abstruct3 extends Abstruct1
{
    public function name($name)
    {
        echo "Hi $name welcome to class C";
    }
}
$b = new Abstruct2();
$b->name("Harish");
$c = new Abstruct3();
$c->name("Harish");
