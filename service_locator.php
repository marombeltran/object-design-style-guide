<?php

/* Inject what you need, not where you can get it from.
 *
 * If a framework or library is complicated enough, it will offer you a special kind of
 * object that holds every service and configuration value you could ever want to use.
 * Common names for such a thing are service locator, manager, registry, or container.
 */

/* What’s a service locator?
 * A service locator is itself a service, from which you can retrieve other services. The
 * following example shows a service locator that has a get() method. When called,
 * the locator will return the service with the given identifier, or throw an exception if the
 * identifier is invalid.
 */

final class ServiceLocator
{
    private array $services;

    public function __construct()
    {
        $this->services = [
            'logger' => new FileLogger( /* .. */)
        ];
    }

    public function get(string $identifier): object
    {
        if (! isset($this->services[$identifier])) {
            throw new LogicException(
                'Unknown service: ' . $identifier, 
            );
        }

        return $this->services[$identifier];
    }
}
