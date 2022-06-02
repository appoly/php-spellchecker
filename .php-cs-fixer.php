<?php

$finder = (new PhpCsFixer\Finder())
    ->in([__DIR__.'/src', __DIR__.'/tests'])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
        'blank_line_before_statement' => true,
        'cast_spaces' => true,
        'comment_to_phpdoc' => true,
        'declare_strict_types' => true,
        'function_typehint_space' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'lowercase_static_reference' => true,
        'lowercase_cast' => true,
        'method_chaining_indentation' => true,
        'native_function_casing' => true,
        'native_function_invocation' => ['include' => ['@compiler_optimized']],
        'new_with_braces' => true,
        'modernize_types_casting' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'object_operator_without_whitespace' => true,
        'ordered_class_elements' => true,
        'array_syntax' => ['syntax' => 'short'],
        'php_unit_dedicate_assert' => true,
        'php_unit_dedicate_assert_internal_type' => true,
        'php_unit_expectation' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_annotation_without_dot' => true,
        'phpdoc_to_return_type' => true,
        'phpdoc_align' => ['align' => 'left'],
        'no_empty_phpdoc' => true,
        'phpdoc_indent' => true,
        'trim_array_spaces' => true,
        'phpdoc_no_empty_return' => true,
        'include' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'no_unneeded_control_parentheses' => true,
        'no_leading_import_slash' => true,
        'phpdoc_order' => true,
        'phpdoc_return_self_reference' => true,
        'phpdoc_scalar' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_summary' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
        'phpdoc_var_annotation_correct_order' => true,
//        'phpdoc_to_param_type' => false,
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true],
        'binary_operator_spaces' => true,
        'single_quote' => true,
        'semicolon_after_instruction' => true,
        'return_type_declaration' => true,
        'short_scalar_cast' => true,
        'single_blank_line_before_namespace' => true,
        'single_line_comment_style' => true,
        'psr_autoloading' => true,
        'class_attributes_separation' => ['elements' => ['method' => 'one', 'property' => 'one']],
        'space_after_semicolon' => true,
        'no_whitespace_in_blank_line' => true,
        'strict_comparison' => true,
        'ternary_operator_spaces' => true,
        'ternary_to_null_coalescing' => true,
        'unary_operator_spaces' => true,
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder($finder)
    ;
