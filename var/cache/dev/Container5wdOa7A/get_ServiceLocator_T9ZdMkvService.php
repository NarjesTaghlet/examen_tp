<?php

namespace Container5wdOa7A;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T9ZdMkvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t9ZdMkv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t9ZdMkv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EtudiantController::AfficherEtudiant' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'App\\Controller\\EtudiantController::addEtudiant' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'App\\Controller\\EtudiantController::deletePersonne' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\EtudiantController:AfficherEtudiant' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'App\\Controller\\EtudiantController:addEtudiant' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'App\\Controller\\EtudiantController:deletePersonne' => ['privates', '.service_locator.MgjZHin', 'get_ServiceLocator_MgjZHinService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\EtudiantController::AfficherEtudiant' => '?',
            'App\\Controller\\EtudiantController::addEtudiant' => '?',
            'App\\Controller\\EtudiantController::deletePersonne' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EtudiantController:AfficherEtudiant' => '?',
            'App\\Controller\\EtudiantController:addEtudiant' => '?',
            'App\\Controller\\EtudiantController:deletePersonne' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}