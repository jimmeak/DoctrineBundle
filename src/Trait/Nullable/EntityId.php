<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
trait EntityId
{
    #[ORM\Column(nullable: true)]
    private string|null $entityId;

    public function getEntityId(): string|null
    {
        return $this->entityId;
    }

    public function setEntityId(string|null $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }
}
