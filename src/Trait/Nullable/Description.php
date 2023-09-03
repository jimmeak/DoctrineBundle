<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait Description
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private string|null $description = null;

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function setDescription(string|null $description): static
    {
        $this->description = $description;

        return $this;
    }
}
