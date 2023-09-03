<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV4;

trait EntityUuidv4
{
    #[ORM\Column]
    private UuidV4 $entityId;

    public function getEntityId(): UuidV4
    {
        return $this->entityId;
    }

    public function setEntityId(UuidV4 $entityId): static
    {
        $this->entityId = $entityId;

        return $this;
    }
}
