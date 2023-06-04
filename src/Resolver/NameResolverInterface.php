<?php

namespace Jimmeak\DoctrineBundle\Resolver;

interface NameResolverInterface
{
    public function name(string $namespace, string $prefix): string;
    public function manyToManyName(string $sourceEntityNamespace, string $targetEntityNamespace, string $prefix): string;
}
