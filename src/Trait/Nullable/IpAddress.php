<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\ORM\Mapping as ORM;

trait IpAddress
{
    #[ORM\Column(nullable: true)]
    private string|null $ipAddress;

    public function getIpAddress(): string|null
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string|null $ipAddress): static
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }
}
