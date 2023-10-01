<?php

namespace Jimmeak\DoctrineBundle\Trait;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait To
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE)]
    private DateTimeImmutable $to;

    public function getTo(): DateTimeImmutable
    {
        return $this->to;
    }

    public function setTo(DateTimeImmutable $to): static
    {
        $this->to = $to;

        return $this;
    }
}
