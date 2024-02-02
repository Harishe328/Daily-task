<?php

class A extends Exception
{
    public function message()
    {
        echo "Not eligibal to vote";
    }
}
$age = 16;
try {
    if ($age < 18) {
        throw new A();
    }
    echo "eligibal to vote";

} catch (A $a) {
    $a->message();
}
