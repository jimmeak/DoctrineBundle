<?php

namespace Jimmeak\DoctrineBundle\Trait;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait From
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE)]
    private DateTimeImmutable $from;

    public function getFrom(): DateTimeImmutable
    {
        return $this->from;
    }

    public function setFrom(DateTimeImmutable $from): static
    {
        $this->from = $from;

        return $this;
    }
}
