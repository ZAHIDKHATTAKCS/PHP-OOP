<?php

class myclass{

    public $x;
    function __construct(){
        echo $this->x = 'Constructor -> this is the value of x =',100,'<br>';
    }

    function show(){
        echo "this is by show function x value = ";
        echo $this->x=100;
        echo "<br>";
    }
    
    // Constructor
    // function __construct(){
    //     echo "this is constructor<br>";
    // }
    

    // Destructor
    function __destruct(){
        echo "this is Destructor";
    }

}


$obj = new myclass();
$obj->show();

?>