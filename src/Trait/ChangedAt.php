<?php

namespace Jimmeak\DoctrineBundle\Trait;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

trait ChangedAt
{
    #[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, options: ['default' => 'CURRENT_TIMESTAMP'])]
    #[Gedmo\Timestampable(on: 'create')]
    private DateTimeImmutable $changedAt;

    public function getChangedAt(): DateTimeImmutable
    {
        return $this->changedAt;
    }

    public function setChangedAt(DateTimeImmutable $changedAt): static
    {
        $this->changedAt = $changedAt;

        return $this;
    }
}
