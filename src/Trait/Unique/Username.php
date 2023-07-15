<?php

namespace Jimmeak\DoctrineBundle\Trait\Unique;

use Doctrine\ORM\Mapping as ORM;

trait Username
{
    #[ORM\Column(unique: true)]
    private string $username;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;
        return $this;
    }
}
