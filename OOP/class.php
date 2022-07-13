<?php
    class phpClass {
        var $var1;
        var $var2 = "Constant string";

        function myFunc($arg1, $arg2) {
            // [..]
        }
    }
    // [..]

    // Actual example: defining a class.
    class Books {
        // Member Variables
        var $price;
        var $title;

        // Member Functions
        function setPrice($par) {
            $this->price = $par;
        }
        function getPrice() {
            // Display the price
            echo $this->price . "<br>";
        }
        function setTitle($par) {
            $this->title = $par;
        }
        function getTitle() {
            // Display the title
            echo $this->title . "<br>";
        }

        // Constructor
        function __construct($par1, $par2) {
        $this->title = $par1;
        $this->price = $par2;
    }
    }
    // // Object creation 
    // // $physics = new Books;
    // // $chemistry = new Books;
    // // $maths = new Books;

    // // Testing object creation
    // $physics->setTitle( "Physics for High School" );
    // $chemistry->setTitle( "Advanced Chemistry" );
    // $maths->setTitle( "Algebra" );

    // $physics->setPrice( 10 );
    // $chemistry->setPrice( 15 );
    // $maths->setPrice( 7 );

    // // Calling the  member functions
    // $physics->getTitle();
    // $physics->getPrice();
    // $chemistry->getTitle();
    // $chemistry->getPrice();
    // $maths->getTitle();
    // $maths->getPrice();


    // Invoking the constructor
    $physics = new Books("Physics for High School", 10);
    $maths = new Books("Advanced Chemistry", 15);
    $chemistry = new Books("Algebra", 7);

    // Call the get functions
    $physics->getTitle();
    $physics->getPrice();
    $chemistry->getTitle();
    $chemistry->getPrice();
    $maths->getTitle();
    $maths->getPrice();

    // Inheritance
    class Novel extends Books {
        var $publisher;

        function setPublisher($par) {
            $this->publisher = $par;
        }
        function getPublisher() {
            echo $this->publisher. "<br>";
        }
             
    }
    // How to use a constructor with a child class?
    class Name {
        var $firstName;
        var $lastName;
        
        // Constructor
        function setName($firstName, $lastName) {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        // To output
        function output() {
            return($this->firstName . ", " . $this->lastName);
        }
    }
    // Child class
    class NameSub extends Name {
        var $middleName;

        function setMiddleName($firstName, $middleName, $lastName) {
            
            // Call the parent class, and pass in the function and its parameters
            Name::setName($firstName, $lastName);
            $this->middleName = $middleName;
        }
        function output() {
            return(Name::output() . " " . $this->middleName);
        }
    }
    // Another similar example
    // class Name {
    //     var $_firstName;
    //     var $_lastName;
        
    //     function Name($first_name, $last_name) {
    //        $this->_firstName = $first_name;
    //        $this->_lastName = $last_name;
    //     }
        
    //     function toString() {
    //        return($this->_lastName .", " .$this->_firstName);
    //     }
    //  }
    //  class NameSub1 extends Name {
    //     var $_middleInitial;
        
    //     function NameSub1($first_name, $middle_initial, $last_name) {
    //        Name::Name($first_name, $last_name);
    //        $this->_middleInitial = $middle_initial;
    //     }
        
    //     function toString() {
    //        return(Name::toString() . " " . $this->_middleInitial);
    //     }
    //  }
    
?>