<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // Classes
    // Classes are the blueprint of objects. Classes hold their own data members and member functions, which can be accessed and used by creating an instance of that class. In PHP class is defined using the class keyword, followed by the name of classes and curly braces ({}). 

    // Example:



    class class_name
    {
        // code goes here...
    }

    // Creating a Class in PHP
    // We will create a class Employee where we will have two properties and two methods for setting and getting the property.

    class Employee
    {
        // Properties
        public $name;
        public $surname;
    }
    // Methods
    function set_name($name)
    {
        // $this->name = $name;
    }
    function get_name()
    {
        // return $this->name;
    }

    //    Note: The $this keyword refers to the current object, and is only available inside methods.

    ?>

</body>

</html>