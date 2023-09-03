<?php

namespace Jimmeak\DoctrineBundle\Resolver;

use Symfony\Component\String\UnicodeString;

use function Symfony\Component\String\u;

class NameResolver implements NameResolverInterface
{
    public function name(string $namespace, string $prefix): string
    {
        $namespaceArray = u($namespace)->replace($prefix, '')->trimPrefix('\\')->split('\\');
        $namespaceArray = array_map(fn (UnicodeString $string) => $string->snake(), $namespaceArray);

        return u('__')->join($namespaceArray);
    }

    public function manyToManyName(string $sourceEntityNamespace, string $targetEntityNamespace, string $prefix): string
    {
        $sourceName = self::name($sourceEntityNamespace, $prefix);
        $targetName = self::name($targetEntityNamespace, $prefix);

        return sprintf('%s__MANY_TO_MANY_CONNECTS__%s', $sourceName, $targetName);
    }
}
