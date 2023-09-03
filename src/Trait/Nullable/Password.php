<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\ORM\Mapping as ORM;

trait Password
{
    #[ORM\Column]
    private string|null $password = null;

    public function getPassword(): string|null
    {
        return $this->password;
    }

    public function setPassword(string|null $password): static
    {
        $this->password = $password;

        return $this;
    }
}
