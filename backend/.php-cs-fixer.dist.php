<?php

$finder = (new PhpCsFixer\Finder())
    ->exclude('var')
    ->exclude('vendor')
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PSR1' => true,
        '@PSR2' => true,
        '@PSR12' => true,
        'concat_space' => ['spacing' => 'one'],
        'phpdoc_line_span' => ['method' => 'single'],
        'php_unit_test_annotation' => ['style' => 'annotation'],
        'php_unit_method_casing' => ['case' => 'snake_case'],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
