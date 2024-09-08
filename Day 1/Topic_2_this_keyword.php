<?php

class MyClass{
    public $a = 50;

    function showvalue(){
        echo $this->a++ , '<br>';
    }
}

$obj = new MyClass();


echo $obj->showvalue();
echo $obj->showvalue();


?>