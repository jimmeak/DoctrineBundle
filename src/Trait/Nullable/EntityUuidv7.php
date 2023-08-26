<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
trait EntityUuidv7
{
    #[ORM\Column(nullable: true)]
    private \Symfony\Component\Uid\UuidV7|null $entityId;

    public function getEntityId(): \Symfony\Component\Uid\UuidV7|null
    {
        return $this->entityId;
    }

    public function setEntityId(\Symfony\Component\Uid\UuidV7|null $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }
}
