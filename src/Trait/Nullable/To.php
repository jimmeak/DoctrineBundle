<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait To
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, nullable: true)]
    private DateTimeImmutable|null $to;

    public function getTo(): DateTimeImmutable|null
    {
        return $this->to;
    }

    public function setTo(DateTimeImmutable|null $to): static
    {
        $this->to = $to;

        return $this;
    }
}
