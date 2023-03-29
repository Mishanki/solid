<?php

$finder = PhpCsFixer\Finder::create();

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@PSR12:risky' => true,
        '@PHP82Migration' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'comment_to_phpdoc' => false,
        'yoda_style' => [
            'equal' => false,
            'identical' => false,
            'less_and_greater' => false,
        ],
        'phpdoc_add_missing_param_annotation' => true,
        'no_superfluous_phpdoc_tags' => false,
        'phpdoc_align' => [
            'align' => 'left',
        ],
        'no_unused_imports' => true,
        'single_line_comment_style' => false,
        'strict_comparison' => false,
    ])
    ->setFinder($finder)
;
