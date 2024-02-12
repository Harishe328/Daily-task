<?php
interface Animal
{
    public function makeSound();
}
class cat implements Animal
{
    public function makeSound()
    {
        echo "meow";
    }
}
class Dog implements Animal
{
    public function makeSound()
    {
        echo "Brakes";
    }
}
class Lion implements Animal{
    public function makeSound()
    {
        echo "Roar";
    }
}
