<?php

namespace Jimmeak\DoctrineBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class JimmeakDoctrineExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        if (isset($config['table_name_listener']['allow']) && $config['table_name_listener']['allow']) {
            $definition = $container->getDefinition('TableNameListener');
            $definition->setArgument(1, $config['table_name_listener']['entity_namespace']);
            if (isset($config['table_name_listener']['name_resolver'])) {
                $definition->setArgument(0, new Reference($config['table_name_listener']['name_resolver']));
            }
        } else {
            $container->removeDefinition('TableNameListener');
        }
    }

    public function getAlias(): string
    {
        return 'jimmeak_doctrine';
    }
}
