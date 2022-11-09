Introduction to OOPS
OOP stands for Object-Oriented Programming.

Object-oriented programming is a core of PHP Programming, which is used for designing a program using classes and
objects that contain both data and functions.


Advantages of OOPS
Programs are faster to execute.
Better code reusability.
Easy to understand code structure.
Very easy to partition the work in a project based on objects.
Easy to make fully reusable programs with less code and less development time.

Disadvantages of OOPS
OOPS cannot be applied everywhere as it is not a universal language.
Need to have a good understanding of classes and objects to apply OOPS.
It takes a lot of effort to create.
It is slower than other programs.
OOPS programs are large in size when compared to normal programs.


Classes
Classes are the blueprint of objects. Classes hold their own data members and member functions, which can be accessed and used by creating an instance of that class. In PHP class is defined using the class keyword, followed by the name of classes and curly braces ({}).

Example:


<?php
class class_name
{
    // code goes here...
}
?>

Creating a Class in PHP
We will create a class Employee where we will have two properties and two methods for setting and getting the property.

<?php
class Employee
{
    // Properties
    public $name;
    public $surname;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}
?>
Note: The $this keyword refers to the current object, and is only available inside methods.