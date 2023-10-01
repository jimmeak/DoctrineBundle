<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait Visited
{
    #[ORM\Column(options: ['default' => false])]
    private bool $visited = false;

    public function isVisited(): bool
    {
        return $this->visited;
    }

    public function setVisited(bool $visited = true): static
    {
        $this->visited = $visited;

        return $this;
    }
}
