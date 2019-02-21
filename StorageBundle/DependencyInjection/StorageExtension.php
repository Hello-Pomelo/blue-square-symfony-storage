<?php

namespace Bluesquare\StorageBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class StorageExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Ressources/config'));
        $loader->load('services.yaml');
        dump($configs); die;
//        $sLoader = new YamlFileLoader($container, new FileLocator('/config/packages/bluesquare'));
//        $sLoader->load('storage.yaml');
//        dump($container->get('kernel')->getProjectDir()); die;
        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

//        dump(new FileLocator('/config/packages/bluesquare')); die;

//        dump($sLoader, $container, $configuration, $config); die;

        $definition = $container->getDefinition('bluesquare.storage');
        $definition->setArgument(0, $config);

        return $config;
    }


    public function getAlias()
    {
//        return ('bluesquare\\storage');
        return parent::getAlias(); // TODO: Change the autogenerated stub
    }
}
