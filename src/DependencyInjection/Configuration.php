<?php

namespace Jimmeak\DoctrineBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $builder = new TreeBuilder('jimmeak_doctrine');
        $rootNode = $builder->getRootNode();

        $rootNode
            ->children()
                ->arrayNode('table_name_listener')
                    ->children()
                        ->booleanNode('allow')
                            ->defaultFalse()
                            ->info('Listener will create new structure of table names based on class Namespaces')
                        ->end()
                        ->scalarNode('entity_namespace')
                            ->defaultValue('App')
                            ->info('If "allow_table_name_listener" is set as true, in this node must be specified the entity namespace')
                        ->end()
                        ->scalarNode('name_resolver')
                            ->defaultNull()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $builder;
    }
}
