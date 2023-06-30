<?php

// Dependencies
// ^-----------------------------------------
/* If object Foo needs object Bar to perform part of its job, Bar is called a dependency of
 * Foo. There are different ways to make sure that Foo has access to the Bar dependency.
 *   It could instantiate Bar itself.
 *   It could fetch a Bar instance from a known location.
 *   It could get a Bar instance injected upon construction.
 */

class Foo
{
    public function someMethod(): void
    {
        $logger = new Logger();
        $logger->debug();
    }
}

class Foo
{
    public function someMethod(): void
    {
        // service location
        $logger = ServiceLocator->getLogger();
        $logger->debug();
    }
}

class Foo
{
    private Logger $logger;

    // dependency injection
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;    
    }

    public function someMethod(): void
    {
        $this->logger();
    }
}


