<?php

/* Polymorphism means that if a parameter has a certain class as its type, any object that is an
 * instance of that class can be provided as a valid argument.
 */

// 1.23 Any Foo instance will be accepted by bar()
    class Foo
    {
        // ...
    }

    final class Bar
    {
        public function bar(Foo $foo): void
        {
           // foo.someMethod(); 
        }
    }

/* Since one instance of Foo could have been configured in a different way, or otherwise
 * have a different internal state than another instance of Foo, every instance of Foo
 * could in theory behave differently.
 *
 * Note:
 * - This means that you can change the behavior of bar() without changing the code in bar().
 * - We’ve already looked at inheritance and how you can use it to change the behavior of a parent class
 *   by overriding (part of) its behavior in a subclass.
 * - Any object that is an instance of a subclass of Foo also counts as an instance of Foo itself.
 *   This makes any instance of that subclass of Foo a valid argument for Foo-type parameters as well.
 * - Using subclasses to change the behavior of objects is often not recommended. In most situations 
 *   it's better to use polymorphism with an interface parameter type.
 */
    


