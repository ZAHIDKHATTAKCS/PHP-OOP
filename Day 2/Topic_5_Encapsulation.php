<?php

// public 
// protected 
// private

class class1{

    // in order to protect this variable or anything we have to use protected keyword like here
    // public $num;

    protected $num=500;
    function __construct(){
        /*echo*/ $this->num=500;       
    }

    // this is we can say getters , it's a special type of method used to access the protected attribute or value we can say 
    function getval(){
        echo "geting value in getter <br>";
        return $this->num;
        
    }

    // this is setters, it's a special type of method or function in which we can modify the value of the protected attribute in a class or value in a class
    // function setval(){
    //     echo "<br>";
    //     echo "Set value using setters<br>";
    //     return $this ->num=100;
    // }

    // now we are creating protected function
    protected function myfunc(){
        return $this->num;
    }

}

class class2 extends class1{
    function show(){
        echo "<br>this value is from show function by getters<br>";
        echo $this -> myfunc();
    }
}




$obj = new class1();

// $obj-> myfunc();

//echo $obj->num=34; now here you can see our number is modified by the public, now we have to protect this , mean encapsulate this, when we use protected keyword we can't access this here in public

echo $obj-> getval();

// echo $obj->setval();

$obj = new class2();
// now print the protected function
echo $obj->show();

?>