<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait Title
{
    #[ORM\Column]
    private string $title;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
}
