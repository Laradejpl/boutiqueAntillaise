<?php

namespace Container1Nnulck;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SystemCachePoolService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.system_cache_pool' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/ResettableInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache-contracts/CacheTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/ContractsTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractAdapter.php';

        return $container->privates['doctrine.system_cache_pool'] = \Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('iJN8ArovEZ', 0, $container->getParameter('container.build_id'), ($container->targetDir.''.'/pools'), ($container->privates['monolog.logger.cache'] ?? $container->load('getMonolog_Logger_CacheService')));
    }
}
