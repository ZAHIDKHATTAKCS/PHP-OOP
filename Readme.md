
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


## <p align='center'>Day 3 </p>

#### <p align='center'>Topic 6 Abstraction</p>

- `Abstraction` Abstraction is the process of hiding the implementation details and showing only the functionality to the user. for Data abstraction we have to create abstract class first and there are some rules for it. <br>

    1.  if we creating a data abstraction class so we need to use abstract keyword before class name.

    2. if we create a data abstraction class so we have to create an abstract function inside it.

    3. if you are creating an abstract class so you can't create an object for it this is rule 3.

    4. you can create an abstract function inside abstract class but you can't create the function body, you can only declare the function inside the abstract class but you can't create the function properly with it's body. you can create the proper function body with the derived class using inheritance.

- `Abstract keyword` is a keyword in php used for creating an abstract class. 

`Note` abstract function can be declared only you have to define it an inheritance class.

#### <p align='center'>Topic 7 Interface</p>

- `Interface` interface is like abstraction, but it's way of defining and accessing is quite different. When we using abstraction so we can't extends two classes at a time in php for that if we want to use abstract class and use to extends/inherit in two child classes so we have to use Interface. in order to create an interface we have to use interface keyword.

`Note` we can't extends mean use inheritance in interface but we can use implements instead of inheritance an interface. implements is used to concatenate multiple interfaces, and in interface we can make two different interfaces and implements the both interfaces on a single class, and we can't use constructor inside the interface, and we can only use public function other than public like protected, private, will give an error in interface.

#### <p align='center'>Topic 8 Static Members</p>

- `Static Members`  Static Members are functions that can be called directly on the class without creating an object, as per class accessing we must use the object creation and calling it so by this way we can access the classes without deals with objects now. 

`Note` so instead of creating object in Static Members we have to use double colon ( : : ) to call the variables directly like, and note that we can't use $this keyword inside the static function for that we can use self keyword instead.


`Note` if you are using constructor inside the static members so you must have to create an object for constructor to call.


<p align="center">class abc { <br>
    public static $name = "Computer Problem Solution with Zahid Khattak";
<br> 
} <br>
// now we can access the name directly <br>
echo abc : : $name ;</p>



## <p align='center'>Day 4 </p>

#### <p align='center'>Topic 9 Traits </p>

- `Trait` trait is when use same function in each class and wants to make changes on the each function in the each class so this will take time to make changes on each function one by one so for that we can use Trait to save our time, so trait is like outer function in code in which we can make changes that will render on each class because we just call the same trait in each class.


#### <p align='center'>Topic 10 Magic Methods </p>
- `Magic Methods` Magic methods are the auto-load functions we can say that called automatically when an object is created. lets suppose there is a scenario in which we just write multiple auto-load methods like constructor in each file and now we have to run it in a main file so we first need to insert all the files to the main file by using require property this will take time


#### <p align='center'>Topic 11 Magic Method Invoke </p>

- `Magic Method Invoke` is the way of defining a function in a way that so we don't need to create an object for it so we just want to call it directly like constructor and destructor calling without the creation of object.


