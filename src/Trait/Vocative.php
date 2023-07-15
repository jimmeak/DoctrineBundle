<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait Vocative
{
    #[ORM\Column]
    private string $vocative;

    public function getVocative(): string
    {
        return $this->vocative;
    }

    public function setVocative(string $vocative): static
    {
        $this->vocative = $vocative;
        return $this;
    }
}
