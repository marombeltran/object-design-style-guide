<?php

/* An object can contain data. This data will be stored in properties. A property will have a
 * name and a type, and it can be populated at any moment after instantiation. A common
 * place for assigning values to properties is inside the constructor.
 */

// 1.7 Defining properties and assigning values
// ^-----------------------------------------

class Foo
{
    private int $someNumber;
    private string $someString;

    public function __construct()
    {
        $this->someNumber = 10;
        $this->someString =  'Hello, world';
    }

    /* The data contained in an object is also known as its state. If that data is going to be
     * hardcoded, as in the previous example, you might as well make it part of the property
     * definition or define a constant for it.
     */

// 1.8 Defining constants
// ^-----------------------------------------
        // private const int someNumber = 10;
        // private someString = 'Hello, world!';

}



/* On the other hand, if the initial value of a property should be variable, you can let the
 * client provide a value for it as a constructor argument. By adding a parameter to the
 * constructor, you force clients to provide a value when instantiating the class.
 */


// 1.9 Adding a constructor argument
// ^-----------------------------------------

class Fooo
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber;
    }
}

$object1 = new Fooo(); // doesn't work

// This should work; it assigns the initial value of 20 to the someNumber
// property of the new Foo instance.
$object1 = new Fooo(10); 

/* Marking the someNumber and someString properties as private makes them available
 * to instances of Foo only. This is called scoping. Alternative scopes for properties are
 * protected and public. By making a property public, you make it
 * accessible to any client.
 */




