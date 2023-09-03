<?php

namespace Jimmeak\DoctrineBundle\Trait\Nullable;

use Doctrine\ORM\Mapping as ORM;

trait Slug
{
    #[ORM\Column(length: 255, nullable: true)]
    private string|null $slug;

    public function getSlug(): string|null
    {
        return $this->slug;
    }

    public function setSlug(string|null $slug): static
    {
        $this->slug = $slug;
        return $this;
    }
}
