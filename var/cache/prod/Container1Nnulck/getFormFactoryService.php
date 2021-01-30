<?php

namespace Container1Nnulck;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Factory/FormFactory.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\FormFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\FormFactory(($container->services['form.factory'] ?? $container->load('getForm_FactoryService')), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $container->getCrudUrlGeneratorService()));
    }
}
