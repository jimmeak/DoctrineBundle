<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;

trait FullName
{
    use FirstName;
    use LastName;

    public function getFullName(bool $lastNameFirst = false): string
    {
        $first = $lastNameFirst ?  $this->getLastName() : $this->getFirstName();
        $second = $lastNameFirst ? $this->getFirstName() : $this->getLastName();

        return sprintf('%s %s', $first, $second);
    }
}
