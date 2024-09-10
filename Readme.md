
<img src="php oop.png" width="100%">

## Learning PHP Object Oriented Programming

## <p align='center'>Day 1 </p>

#### <p align='center'>Topic 1 of OOP</p>

- `OOP` Object Oriented Programming OOP stands for Object Oriented Programming. OOP is a Programming Style - in which multiple lines of 
code is wrapped into small small modules (classes, methods etc) , OOP style makes program easily understandable and control the flow of data exchange
Code written in OOP style with proper comments enhances readability, reusability, maintainability of code; that's why most of programmers like OOP style. OOP helps to keep PHP code DRY " Don't Repeat Yourself " .

<br>

#### <p align='center'>Topic 2 Object Creation</p>

- `object Creation` whenever you want to create an object you must have to use new keyword like <br>
<p align="center">$object = new My_class ( ) ;</p>

<p align="center">$object -> Msg ( ) ;</p> <br>

- `access modifiers in OOP` public keyword is access modifier in PHP OOP through which we can make a variable access anywhere mean inside the function and outside the function too.

- `this keyword` The $this keyword refers to the current object, and is only available inside methods, $this is a reserved keyword in PHP that refers to the calling object. It is usually the object to which the method belongs,

<br>

#### <p align='center'>Topic 3 Constructor and Destructor</p>

- `Constructor` Constructor is called automatically when we create an object for a class, in order to create constructor we have to use double underscore `__construct` and write construct. This is the benefit of constructor so we don't have to call the constructor by object, it's automatically called whenever we just create an object.

- `Destructor` Destructor is also called automatically when we just create object for a class, but the main difference in between Constructor and Destructor is when the class is load the first thing that runs is constructor and the last thing run when the class is load is Destructor

<p align="center"> <b>Note: Constructor execute first, after that all the other functions that we are defined are run in order, after all these Destructor will run at the end </b></p>

<br><br>

## <p align='center'>Day 2 </p>

#### <p align='center'>Topic 4 Inheritance</p>

- `Inheritance` inheritance is the fundamental concept in object oriented programming where on class known is child class derives properties and behaviors from another class known is parent class, 
<br>
Inheritance is when we used the functionality of a one class in another class is called inheritance

- `Extends Keyword` in order to inherit the properties of the parent class to the child class we have to use the extends keyword,

- `parent:` and to apply the properties of parent to the child class we have to use parent: and than call the property like 

<p align="center">Parent : :  __Construct ( ) ;</p><br>

#### <p align='center'>Topic 5 Encapsulation</p>

- `Encapsulation` encapsulation show the necessary data and hide all the other data from the public,<br>

     Encapsulation allows you to expose only the essential parts of an object to the outside world through public methods or interfaces,<br>

    The internal details and data of the object that aren’t needed by the outside world are kept private. This is done to prevent direct access or modification, which helps protect the integrity and consistency of the object’s data.

- `Note` There are three things are used in Encapsulation , these create security of the program for that no one can use modify program<br>
    1. Public ( if you public something that will be access anywhere in program )

    2. Protected ( if we use protected keyword for a variable so we can't access later on even we can't echo on webpage, the only way to access and modify is Getter and Setters )
    
    3. Private ( if we declare a variable private so we can't access and modify even in getter and in setter also it in another class )

- `Getters` Getters are methods used to retrieve or access the value of a private or protected attribute in a class.<br>
<p align="center">
function getval ( ) { <br>
echo " geting value in getter " ; <br>
return $this -> num ; <br>   
}

</p>

- `Setter` Setters are methods used to set or modify the value of a private or protected attribute in a class.<br>
<p align="center">
function setval ( ) { <br>
echo " setting value in setter " ; <br>
return $this -> num = 1000 ; <br>   
}

</p>

- `Note` we can also protected functions and access and modify them by getter and setter like how we set values earlier