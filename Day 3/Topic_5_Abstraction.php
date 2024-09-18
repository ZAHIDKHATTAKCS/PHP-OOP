<?php

// abstract class to create abstract class we have to use abstract keywords
abstract class ABC{
    abstract function mymsg();
}


// we have to inherit the abstract class in a new class to define the abstract function body
class XYZ extends ABC{
    function mymsg(){
        echo "Data abstract in PHP <br>";
    }

    function myfunc(){
        echo   "string in PHP <br>";
    }
}

$obj = new xyz(); // creating an ABC object
$obj -> mymsg(); // creating an ABC object
$obj -> myfunc(); // creating an ABC object


?>