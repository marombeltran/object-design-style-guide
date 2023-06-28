<?php

use function Sodium\version_string;


// 1.1 A minimun viable class
class Foo
{
    // There's nothing here
}

$object1 = new Foo();
$object2 = new Foo();

// 1.2 Calling a method on an instance
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

