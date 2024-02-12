<?php
class A
{
    public function myPublic()
    {
        echo "I am from public" . "<br>";
    }
    protected function myProtected()
    {
        echo "I am from protected" . "<br>";
    }
    private function myPrivate()
    {
        echo "I am from private" . "<br>";
    }
    public function myFunction()
    {
        $this->myPublic();
        $this->myProtected();
        $this->myPrivate();
    }
}
$a = new A();
$a->myPublic();
// $a->myProtected();    //can not outside the class
// $a->myPrivate();      //can not outside the class
$a->myFunction();
class B extends A
{
    public function myFun()
    {
        $this->myPublic();
        $this->myProtected();
        //$this->myPrivate();           //can not outside the class
    }
}


$b = new B();
$b->myPublic();
$b->myFun();
