<?php

namespace Jimmeak\DoctrineBundle\Trait;

use Doctrine\ORM\Mapping as ORM;
use Jimmeak\DoctrineBundle\Enum\HashAlgorithm;

/**
 * This trait is meant to use as a storage for hash
 * made by an algorithm from PHP function hash.
 *
 * https://www.php.net/manual/en/function.hash
 *
 * The longest hash is a string of 128 characters,
 * which is the max length of the field.
 */
trait CheckSum
{
    #[ORM\Column(length: 128)]
    private string $checkSum;

    public function getCheckSum(): string
    {
        return $this->checkSum;
    }

    public function setCheckSum(string $stringOrCheckSum, HashAlgorithm $hashAlgorithm = null): static
    {
        if (null !== $hashAlgorithm) {
            $stringOrCheckSum = hash($hashAlgorithm->value, $stringOrCheckSum);
        }

        $this->checkSum = $stringOrCheckSum;

        return $this;
    }
}
