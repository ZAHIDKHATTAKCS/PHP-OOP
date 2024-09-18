<?php


// it's actually abstraction 
interface inter1{
    public function sum();
    public function sub();
}


interface inter2{
    public function showmsg();
}



class child implements inter1,inter2{
    public function sum(){
        echo "10 + 9 = ",10+9, "<br>";
    }

    public function sub(){
        echo "10 divide by 5 = ",10/5,"<br>";
    }

    public function showmsg()
    {
        echo "Show message function";
    }
}




$obj = new child();

$obj -> sum();
$obj -> sub();
$obj -> showmsg();

?>