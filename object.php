<!-- <?php
class car
{
    public $name;
    public $color;

    public function set_name($name)
    {
        $this->name = $name; //use to initialize value for $name
    }
    public function get_name()
    {
        return $this->name;
    }
}

$swift = new car();
$bolano = new car();
$swift->set_name('Swift');
$bolano->set_name('Bolano');

echo $swift->get_name();
echo "<br>";
echo $bolano->get_name();

?>  -->


<!-- <?php
class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)         //construct use to initialize value for all
    {
        $this->name = $name; 
        $this->color = $color;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?> -->

<?php

class student {
function __construct() {
	echo "This is a constructor<br>";
	echo "Object is initialized in constructor<br>";
	}

	function __destruct() {
		echo "This is destruct<br>";
		echo "Object is destroyed in destructor";
	}
}

$subject = new student();

?>
