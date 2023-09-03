<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait NickName
{
    #[ORM\Column]
    private string $nickName;

    public function getNickName(): string
    {
        return $this->nickName;
    }

    public function setNickName(string $nickName): static
    {
        $this->nickName = $nickName;

        return $this;
    }
}
