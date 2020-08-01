<?php

namespace JuanMiguelBesada\DoctrineTranslatableFormBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder("juan_miguel_besada_doctrine_translatable_form");
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->arrayNode('locales')
                    ->isRequired()
                    ->scalarPrototype()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
