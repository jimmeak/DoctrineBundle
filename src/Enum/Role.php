<?php

namespace Jimmeak\DoctrineBundle\Enum;

enum Role: string
{
    case WATCHER = 'ROLE_WATCHER';
    case USER = 'ROLE_USER';
    case AUTHOR = 'ROLE_AUTHOR';
    case MODERATOR = 'ROLE_MODERATOR';
    case ADMIN = 'ROLE_ADMIN';
    case SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
}
