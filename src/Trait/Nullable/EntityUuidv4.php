<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV4;

trait EntityUuidv4
{
    #[ORM\Column(nullable: true)]
    private UuidV4|null $entityId;

    public function getEntityId(): UuidV4|null
    {
        return $this->entityId;
    }

    public function setEntityId(UuidV4|null $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }
}
