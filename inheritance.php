<?php
class inhertance1{
    public $name;
    public $age;
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    function myFunction(){
        echo "My name is {$this->name} and my age is {$this->age} <br>";
    }
}
class inhertance2 extends inhertance1{
    function inh(){
        echo "Thank u";
    }
}
$a=new inhertance2("Harish",22);
$a->myFunction();
$a->inh();
?>