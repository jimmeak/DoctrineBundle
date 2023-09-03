<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait LastName
{
    #[ORM\Column]
    private string $lastName;

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }
}
