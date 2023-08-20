<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
trait EntityFqcn
{
    #[ORM\Column]
    private string $entityFqcn;

    public function getEntityFqcn(): string
    {
        return $this->entityFqcn;
    }

    public function setEntityFqcn(string $entityFqcn): static
    {
        $this->entityFqcn = $entityFqcn;
        return $this;
    }
}
