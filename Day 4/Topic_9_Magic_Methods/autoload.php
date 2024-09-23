<?php


function __autoload($class){


    require $class.'.php';

    // require "first.php";

}


$obj = new first();
?>

<!-- it is fully changed in  7.2 and later on so its not working -->