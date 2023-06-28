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
}


