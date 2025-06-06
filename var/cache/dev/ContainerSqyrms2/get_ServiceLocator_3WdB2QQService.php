<?php

namespace ContainerSqyrms2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3WdB2QQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3WdB2QQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3WdB2QQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'appointment' => ['privates', '.errored..service_locator.3WdB2QQ.App\\Entity\\Appointment', NULL, 'Cannot autowire service ".service_locator.3WdB2QQ": it references class "App\\Entity\\Appointment" but no such service exists.'],
        ], [
            'appointment' => 'App\\Entity\\Appointment',
        ]);
    }
}
