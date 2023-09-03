<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src')
    ->append([__FILE__]);

$config = new Config();

return $config
    ->setRules([
        '@Symfony' => true,
        '@PSR12' => true,
        '@PHP82Migration' => true,
        'concat_space' => ['spacing' => 'one'],
        'global_namespace_import' => ['import_classes' => true, 'import_constants' => false, 'import_functions' => false],
        'nullable_type_declaration' => ['syntax' => 'union'],
        'yoda_style' => true,
    ])
    ->setFinder($finder);
