<?php

class myclass{
    public function __construct()
    {
        $this->name="Zahid Khattak";
    }

    // invoke function here
    public function __invoke()
    {
        echo $this->name;
    }

    // public function show(){
    //     echo $this->name;
    // }
}


$obj = new myclass();

$obj();
?>