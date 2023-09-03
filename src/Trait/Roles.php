<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;
use Jimmeak\DoctrineBundle\Enum\Role;

trait Roles
{
    #[ORM\Column(type: Types::JSON)]
    private array $roles = [];

    /**
     * @return Role[]
     */
    public function getRoles(): array
    {
        return array_map(fn (string $role) => Role::tryFrom($role), $this->roles);
    }

    /**
     * @param Role[] $roles
     */
    public function setRoles(array $roles): static
    {
        foreach ($roles as $role) {
            if (!$role instanceof Role) {
                throw new InvalidArgumentException('You can add only a role of object ' . Role::class);
            }
        }

        $this->roles = array_map(fn (Role $role) => $role->value, $this->roles);

        return $this;
    }

    public function addRole(Role $role): static
    {
        if (!in_array($role->value, $this->roles)) {
            $this->roles[] = $role->value;
        }

        return $this;
    }

    public function removeRole(Role $role): static
    {
        $key = array_search($role->value, $this->roles);
        if (false !== $key) {
            unset($this->roles[$key]);
        }

        return $this;
    }
}
