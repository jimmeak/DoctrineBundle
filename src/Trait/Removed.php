<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait Removed
{
    #[ORM\Column(options: ['default' => false])]
    private bool $removed = false;

    public function isRemoved(): bool
    {
        return $this->removed;
    }

    public function setRemoved(bool $removed = true): static
    {
        $this->removed = $removed;
        return $this;
    }
}
