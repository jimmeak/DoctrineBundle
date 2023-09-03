<?php

namespace Jimmeak\DoctrineBundle\EventListener;

use Doctrine\ORM\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Jimmeak\DoctrineBundle\Resolver\NameResolverInterface;

readonly class TableNameListener
{
    public function __construct(
        protected NameResolverInterface $nameResolver,
        protected string $entityNamespace = 'App',
    ) {
    }

    public function loadClassMetadata(LoadClassMetadataEventArgs $eventArgs): void
    {
        $metadata = $eventArgs->getClassMetadata();
        $prefix = $eventArgs->getEntityManager()->getConfiguration()->getEntityNamespace($this->entityNamespace);

        $metadata->setPrimaryTable(['name' => $this->findName($metadata->getName(), $prefix)]);

        if ($metadata->rootEntityName === $metadata->getName() || !$metadata->isInheritanceTypeSingleTable()) {
            $metadata->setPrimaryTable(['name' => $this->findName($metadata->getName(), $prefix)]);
        }

        foreach ($metadata->getAssociationMappings() as $fieldName => $mapping) {
            if (ClassMetadataInfo::MANY_TO_MANY === $mapping['type'] && $mapping['isOwningSide']) {
                $metadata->associationMappings[$fieldName]['joinTable']['name'] = $this->findManyToManyName(
                    $mapping['sourceEntity'],
                    $mapping['targetEntity'],
                    $prefix
                );
            }
        }
    }

    private function findName(string $namespace, string $prefix): string
    {
        return $this->nameResolver->name($namespace, $prefix);
    }

    private function findManyToManyName(string $sourceEntityNamespace, string $targetEntityNamespace, string $prefix): string
    {
        return $this->nameResolver->manyToManyName($sourceEntityNamespace, $targetEntityNamespace, $prefix);
    }
}
