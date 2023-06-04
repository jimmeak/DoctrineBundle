<?php

namespace Jimmeak\DoctrineBundle;

use Jimmeak\DoctrineBundle\DependencyInjection\JimmeakDoctrineExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JimmeakDoctrineBundle extends Bundle
{
    public function getContainerExtension(): ExtensionInterface|null
    {
        if (is_null($this->extension)) {
            $this->extension = new JimmeakDoctrineExtension();
        }

        return $this->extension;
    }
}
