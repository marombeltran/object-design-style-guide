<?php

/* Besides state, an object also has behaviors that its clients can make use of. These
 // behaviors are defined as methods on the object’s class. The public methods are the
 // ones accessible to clients of the object. They can be called any time after the object
 // has been created.
 //
 // Some methods will return something to the caller. In that case an explicit type will
 // be declared as the return type. Some methods will return nothing. In that case the
 // return type will be void.
 */

// 1.13 An object's behaviors are defined as public methods
// ^-----------------------------------------

/* A class can also contain private method definitions. This works in the same way as
 * with private properties. Any instance of a given class can call private methods on any
 * other instance of the same class, including itself. Usually though, private methods are
 * used to represent smaller steps in a larger process.
 */

/* Just like you can define constructor parameters, you can define method parameters. A
 * caller then has to provide a specific value as an argument when calling the method.
 * The method itself can use the value to determine what to do, it can pass it on to col-
 * laborating objects, or it can use it to change the value of a property.
 */

// 1.14 Several ways in which method arguments can be used
// ^-----------------------------------------
class Bar {}

class Foo
{
    private ?int $number;

    public function setNumber(int $newNumber): void
    {
        $this->number = $newNumber;
    }

    private function multiply(int $other): int
    {
        return $this->number * $other;
    }

    public function someOtherMethod(?Bar $bar): void
    {
        // $bar->doSomething();
    }
}


