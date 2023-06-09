<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait Description
{
    #[ORM\Column(type: Types::TEXT)]
    private string $description;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }
}
