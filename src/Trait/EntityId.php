<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

trait EntityId
{
    #[ORM\Column]
    private string $entityId;

    public function getEntityId(): string
    {
        return $this->entityId;
    }

    public function setEntityId(Uuid|string $entityId): static
    {
        $this->entityId = $entityId instanceof Uuid ? $entityId->toRfc4122() : $this->entityId;

        return $this;
    }
}
