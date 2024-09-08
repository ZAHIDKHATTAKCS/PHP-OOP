## Learning PHP Object Oriented Programming


#### <p align='center'>Topic 1 of OOP</p>

- `OOP` Object Oriented Programming OOP stands for Object Oriented Programming. OOP is a Programming Style - in which multiple lines of 
code is wrapped into small small modules (classes, methods etc) , OOP style makes program easily understandable and control the flow of data exchange
Code written in OOP style with proper comments enhances readability, reusability, maintainability of code; that's why most of programmers like OOP style. OOP helps to keep PHP code DRY " Don't Repeat Yourself " .

<br>

#### <p align='center'>Topic 2 Object Creation</p>

- `object Creation` whenever you want to create an object you must have to use new keyword like <br>
<p align="center">$object = new My_class ( ) ;</p>

<p align="center">$object -> Msg ( ) ;</p> <br>

#### <p align='center'>Topic 3 this keyword</p>

- `access modifiers in OOP` public keyword is access modifier in PHP OOP through which we can make a variable access anywhere mean inside the function and outside the function too.

- `this keyword` The $this keyword refers to the current object, and is only available inside methods, $this is a reserved keyword in PHP that refers to the calling object. It is usually the object to which the method belongs,

<br>

#### <p align='center'>Topic 4 Constructor and Destructor</p>
- `Constructor` Constructor is called automatically when we create an object for a class, in order to create constructor we have to use double underscore `__construct` and write construct. This is the benefit of constructor so we don't have to call the constructor by object, it's automatically called whenever we just create an object.

- `Destructor` Destructor is also called automatically when we just create object for a class, but the main difference in between Constructor and Destructor is when the class is load the first thing that runs is constructor and the last thing run when the class is load is Destructor

<p align="center"> <b>Note: Constructor execute first, after that all the other functions that we are defined are run in order, after all these Destructor will run at the end </b></p>