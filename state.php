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

// $object1 = new Fooo(); // doesn't work

// This should work; it assigns the initial value of 20 to the someNumber
// property of the new Foo instance.
$object1 = new Fooo(10); 

/* Marking the someNumber and someString properties as private makes them available
 * to instances of Foo only. This is called scoping. Alternative scopes for properties are
 * protected and public. By making a property public, you make it
 * accessible to any client.
 */

// 1.10 Defining and using a public property
// ^-----------------------------------------

class someClass
{
    // public const int someNumber = 10; // shows an error

    /* Constants are inherently public and can be accessed from anywhere within the scope of their visibility.
     * In PHP, you cannot specify a data type for constants like you can for variables.
     * Remember, constants are public by default and cannot have visibility modifiers. 
     */ 
    const SOME_NUMBER = 10;

    public string $someString;
}

someClass::SOME_NUMBER;

// PHP Fatal error: Cannot use temporary expression in write context ..
// (new someClass())->someString = "Hello, world\n";
// ^-----------------------------------------

// Use instead;
$obj = new someClass();
$obj->someString = "Hello, world\n";

// someString is not a constant, but
// it’s public, so we can change it.
$someObj = new someClass();
$someObj->someString = "Hello, world\n";

/* NOTE: In general, a private scope is preferable and should be your default choice. 
 * ^---------------------------------------------------------------------------------
 * Limiting access to object data helps the object keep its implementation details to itself. It
 * ensures that clients won’t rely on any specific piece of data owned by the object, and
 * that they will always talk to the object through explicitly defined public methods
 */

/* Property scoping, is class-based, meaning
 * that if a property is private, any instance of the same class has access to this property
 * on any instance of the same class, including itself.
 */

class SAClass
{
    private int $someNumber;

    public function __construct(int $someNumber = 23)
    {
        $this->someNumber = $someNumber;
    }

    public function getSomeNumber(): int
    {
        return $this->someNumber;
    }

    public function getSomeNumberFrom(SAClass $other): int
    {
        $other->someNumber = 33;
        return $other->someNumber;
    }
}

// modified initial value from another instance of the same class.
// It's crazy..
$obO = new SAClass(20);
$obj = new SAClass();

echo $obj->getSomeNumberFrom($obO) . \PHP_EOL;
echo $obj->getSomeNumber() . \PHP_EOL;
echo $obO->getSomeNumber() . \PHP_EOL;

/* When the value of an object’s property can change during the lifetime of the object,
 * it’s considered a mutable object. If none of an object’s properties can be modified after
 * instantiation, the object is considered an immutable object.
 */

// 1.12 Mutable vs. immutable objects

class Mutable
{
    private int $someNumber;

    public function __construct(int $initialNumber)
    {
        $this->someNumber = $initialNumber; 
    }

    public function increase(): void
    {
        $this->someNumber += 1;
    }
}

class Inmutable
{
    
}
