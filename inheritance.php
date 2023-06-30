<?php

/* It’s possible to define only part of a class and let others expand on it. For instance, you
 * can have a class with no properties and no methods, but only method signatures. Such
 * a class is usually called an interface, and many object-oriented languages allow you to
 * define it as such. A class can then implement the interface and provide the actual
 * implementations of the methods that were defined in the interface.
 */

// 1.17 Bar and Baz “implementing” the Foo interface
interface Foo
{
    public function foo(): void;
}

class Bar implements Foo
{ }

class Baz implements Foo
{
    public function foo(): void 
    {
        // ..
    }
}

/* An interface doesn’t define any implementation, but an abstract class does. It allows
 * you to provide the implementation for some methods and only the signatures for
 * some other methods. An abstract class can’t be instantiated, but first has to be
 * extended by a class that provides implementations for the abstract methods.
 */

// 1.18 Baz extends the abstract Foo class

abstract class Foo
{
    abstract public function foo(): void;
}

class Bazz extends Foo
{
    public function foo(): void
    {}
}

/* Classes that extend from another class have access to public and protected methods
 * of the parent class.
 */

// 1.20 Access to public and protected methods
class Foo
{
    public function foo(): void
    {
        // do something
    }

    protected function bar(): void
    {}

    private function baz(): void
    {}
}

class Bar extends Foo
{
    public function someMethod(): void
    {
        // bar is available because it's a public method.
        $this->foo();

        // bar is available because it's a protected method.
        $this->bar();

        // baz is not available because it's a private method.
        // $this->baz();
    }
}

// Subclasses can only override protected and public methods of a parent class too.

/* Note:
* In practice, using inheritance mostly leads to a confusing design.
*
* We’ll use inheritance mainly in two situations:
*   -> When defining interfaces for dependencies.
*   -> When defining a hierarchy of objects, such as when defining custom exceptions
*      that extend from built-in exception classes
*
* In most other cases we'd want to actively prevent developers to extend from our
* classes. You can do so by adding the final keyword in front of the class.
*/

final class Bar
{}

class Baz extends Bar // Won't work
{ }

