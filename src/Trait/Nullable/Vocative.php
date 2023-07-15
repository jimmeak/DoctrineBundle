<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\ORM\Mapping as ORM;

trait Vocative
{
    #[ORM\Column(nullable: true)]
    private string|null $vocative = null;

    public function getVocative(): string|null
    {
        return $this->vocative;
    }

    public function setVocative(string|null $vocative): static
    {
        $this->vocative = $vocative;
        return $this;
    }
}
