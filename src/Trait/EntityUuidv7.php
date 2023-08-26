<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
trait EntityUuidv7
{
    #[ORM\Column]
    private \Symfony\Component\Uid\UuidV7 $entityId;

    public function getEntityId(): \Symfony\Component\Uid\UuidV7
    {
        return $this->entityId;
    }

    public function setEntityId(\Symfony\Component\Uid\UuidV7 $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }
}
