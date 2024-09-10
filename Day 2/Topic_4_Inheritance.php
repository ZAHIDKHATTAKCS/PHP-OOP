<?php

// first create base class or parent class

class Base{
    function __construct(){
        echo "Constructor of a Base class <br>";
    }
    function func(){
        echo "function 1 <br>";
    }
}



// now create a child class with extends keyword in order to inherit the properties of base class

class child extends Base{
    function __construct()
    {
        // now inherit the property of construct to the child class
        parent :: __construct();

        // now inherit the func here
        parent:: func();
        echo "Constructor of child class<br>";
    }
}

// $obj = new Base();

$obj = new child();

$obj ->  func();
?>