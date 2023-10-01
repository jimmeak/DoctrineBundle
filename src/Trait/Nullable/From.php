<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait From
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, nullable: true)]
    private DateTimeImmutable|null $from = null;

    public function getFrom(): DateTimeImmutable|null
    {
        return $this->from;
    }

    public function setFrom(DateTimeImmutable|null $from): static
    {
        $this->from = $from;

        return $this;
    }
}
