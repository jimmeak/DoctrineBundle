<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait Text
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private string|null $text = null;

    public function getText(): string|null
    {
        return $this->text;
    }

    public function setText(string|null $text): static
    {
        $this->text = $text;
        return $this;
    }
}
