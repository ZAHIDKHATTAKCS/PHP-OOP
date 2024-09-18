<?php

// Static Members 

class abc{
    public static $name = "Computer Problem Solution with Zahid Khattak <br><br>";
    // public static function show(){
    //     echo self::$name;
    // }

    // public function __construct($n)
    // {
    //     echo self::$name = $n;
    // }


    
}

// now if you want to use static variables in other class

class xyz extends abc{
    public static function show() {
        echo abc::$name;
    }
}



// now we can access the name directly
// echo abc::$name;

// abc::show();

xyz::show();

// $obj = new abc("Computer Problem Solution with zahid Khattak by Constructor");

?>