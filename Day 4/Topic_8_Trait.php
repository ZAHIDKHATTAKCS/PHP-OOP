<?php

// we can also create multiple traits and if we want to use trait1 in specific functions and traits2 in other functions so we need only to call it by object
trait trait1{
    public function showmsg(){
        echo "this is trait1 <br>";
    }

    // we can also define multiple functions here in trait and if we want to render in a specific class so we need to call in that class object.
}

trait trait2{
    public function show(){
        echo "this is trait2 <br>";
    }
}

class a {
    use trait1,trait2;
}

class b {
    use trait2;
}

class c {
    use trait1;
}

class d {
    use trait1,trait2;
}

// creates objects here for calling onwards
$obj = new a();
$obj1 = new b();
$obj2 = new c();
$obj3 = new d();


echo "class a <br>";
// class a
$obj->showmsg();
$obj->show();

echo "<br>";


echo "class b <br>";
// class b
$obj1->show();


echo "<br>";


echo "class c <br>";
// class c
$obj2->showmsg();

echo "<br>";

echo "class d <br>";
// class d
$obj3->showmsg();
$obj3->show();

echo "<br>";
?>