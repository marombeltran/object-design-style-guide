<?php

// 1.1 A minimun viable class
// ^-----------------------------------------

class Foo
{
    // There's nothing here
}

$object1 = new Foo();
$object2 = new Foo();

// 1.2 Calling a method on an instance
// ^-----------------------------------------

class Fooo
{
    public function someMethod(): void
    {
        // Do something
    }
}

$object3 = new Fooo();

// Once you have an instance, you can call methods on it.
$object3->someMethod();

/* A regular method,like someMethod(), can only be called on an instance of the class.
 * Such a method is called an object method. You can also define methods that can be
 * called without an instance. These are called static methods.
 */

// 1.3 Defining a static method
// ^-----------------------------------------

class Faa
{
    public function anObjectMethod(): void
    {}

    public static function aStaticMethod(): void
    {}
}

$object4 = new Faa();

$object4->anObjectMethod(); // can only be called on an instance of SomeClass
Faa::aStaticMethod(); // can be called without an instance.

/* Besides object and static methods, a class can also contain a special method: the con-
 * structor. This method will be called before a reference to the object gets returned. If
 * you need to do anything to prepare the object before it’s going to be used, you can do
 * it inside the constructor.
 */

// 1.4 Defining a constructor method
// ^-----------------------------------------

class someClass
{
    public function __construct()
    // will be implicitly called before a someClass instance gets assigned to object1.
    {
        // prepare the object
    }
}

$someObject = new someClass();

/* You can prevent an object from being fully instantiated by throwing an exception inside
 * the constructor, as shown in the following listing.
 */

// 1.4 Throwing an exception inside the constructor
// ^-----------------------------------------

class Bazz
{
    public function __construct()
    {
        // It won’t be possible to instantiate Bazz because its constructor always
        // throws an exception.
        throw new \RuntimeException();
    }
}

try {
    $object5 = new Bazz();
} catch (\RuntimeException $exception) {
    // object from Bazz will be undefined here
}

/* The standard way to instantiate a class is using the new operator, as we just saw. It’s also
 * possible to define a static factory method on the class itself, which returns a new instance
 * of the class.
 */

// 1.5 Defining a static factory method
// ^-----------------------------------------

class someAnotherClass
{
    public static function create(): someAnotherClass
    {
        return new someAnotherClass();
    }
}

// The create() method has to be defined as static because it should be called on the
// class, not on an instance of that class.

$object6 = someAnotherClass::create();
$object7 = someAnotherClass::create();


