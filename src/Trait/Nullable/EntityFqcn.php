<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\ORM\Mapping as ORM;

trait EntityFqcn
{
    #[ORM\Column(nullable: true)]
    private string|null $entityFqcn = null;

    public function getEntityFqcn(): string|null
    {
        return $this->entityFqcn;
    }

    public function setEntityFqcn(string|null $entityFqcn): static
    {
        $this->entityFqcn = $entityFqcn;

        return $this;
    }
}
