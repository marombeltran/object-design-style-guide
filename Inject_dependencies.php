<?php

/* In the following two chapters, we’ll discuss different types of objects and the guide-
 * lines for instantiating them. Roughly speaking, there are two types of objects, and
 * they both come with different rules. In this chapter we’ll consider the first type of
 * objects: services.
 */

 // Two types of objects
 /* In an application there will typically be two types of objects:
  *      Service objects that either perform a task or return a piece of information
  *      Objects that will hold some data, and optionally expose some behavior for
  *       manipulating or retrieving that data
  */

/* Objects of the first type will be created once, and then be used any number of times,
 * but nothing can be changed about them. They have a very simple lifecycle. Once
 * they’ve been created, they can run forever, like little machines with specific tasks.
 * These objects are called services.
 */

// The FileLogger service
/* A service usually needs other services to do its job. Those other services are its depen-
 * dencies, and they should be injected as constructor arguments. The following File-
 * Logger class is an example of a service with its dependency.
 */
interface Logger
{
    public function log(string $message): void;
}

class Formatter
{
    private string $message;

    public function format(string $message): string
    {
        $this->message = $message; 
    }
}

final class FileLogger implements Logger
{
    private Formatter $formatter;

    public function __construct(Formatter $formatter)
    {
       $this->formatter = $formatter; 
    }

    public function log(string $message): void
    {
        $formattedMessage = $this->formatter->format($message);
    }
}

$logger = new FileLogger(new Formatter());
$logger->log('A message');

/* Making every dependency available as a constructor argument will make the service
 * ready for use immediately after instantiation. No further setup will be required, and
 * you can’t accidentally forget to provide a dependency.
 *
 * Sometimes a service needs some configuration values, like a location for storing
 * files or credentials for connecting to an external service. Inject such configuration val-
 * ues as constructor arguments too, as in the following listing.
 */



