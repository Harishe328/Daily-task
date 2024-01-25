<?php
class Fruit{
    protected $name;
    private $weight;
    protected $color;

    function __construct($name,$weight,$color)
    {
        $this->name=$name;
        $this->weight=$weight;
        $this->color=$color;
        //echo "$name<br>$weight";
    }
   public function getName(){
        return $this->name;
    }

    function getWeight(){
        return $this->weight;
    }
    function __destruct(){
        echo "object is destroyed";
    }
    protected function setColor($color){
        $this->color=$color;
    }
    public function getColor()
    {
        return $this->color;
    }
}
    // $a=new Fruit("Apple",2);
    // echo $a->get_name()."<br>";
    // echo $a->get_weight()."<br>";
class Merchant extends Fruit{

    public function price(){
        echo "{$this->name} is from parent";
        echo "Price of fruit  is 50 rupees";
    }
    // public function fruitColor()
    // {
    //     $this->setColor("yellow");
    // }
  
}
$obj = new Merchant("mango",30,"red");
// $obj->fruitColor();
echo $obj->getColor();
?>