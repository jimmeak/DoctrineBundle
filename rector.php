<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tools',
    ]);

    $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);
    $rectorConfig->import(LevelSetList::UP_TO_PHP_82);
    $rectorConfig->import(SymfonySetList::SYMFONY_63);
    $rectorConfig->import(SymfonySetList::SYMFONY_CODE_QUALITY);
};
