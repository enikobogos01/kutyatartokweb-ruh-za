<?php

use PhpUnitGen\Core\Generators\Tests\DelegateTestGenerator;

return [
    /*
     |--------------------------------------------------------------------------
     | Automatic Generation.
     |
     | Tells if the generator should create tested class instantiation and
     | complex tests skeleton (getter/setter tests...).
     |--------------------------------------------------------------------------
     */
    'automaticGeneration'      => true,

    /*
     |--------------------------------------------------------------------------
     | Contract implementations to use.
     |
     | Tells which implementation you want to use when PhpUnitGen requires a
     | specific contract. Please see
     | https://phpunitgen.io/docs#/en/configuration?id=implementations-to-use
     |--------------------------------------------------------------------------
     */
    'implementations'          => DelegateTestGenerator::implementations(),

    /*
     |--------------------------------------------------------------------------
     | Base Namespace of source code.
     |
     | This string will be removed from the test class namespace.
     |--------------------------------------------------------------------------
     */
    'baseNamespace'            => 'App',

    /*
     |--------------------------------------------------------------------------
     | Base Namespace of tests.
     |
     | This string will be prepend to the test class namespace.
     |--------------------------------------------------------------------------
     */
    'baseTestNamespace'        => 'Tests',

    /*
     |--------------------------------------------------------------------------
     | Test Case.
     |
     | The absolute class name to TestCase.
     |--------------------------------------------------------------------------
     */
    'testCase'                 => 'Tests\\TestCase',

    /*
     |--------------------------------------------------------------------------
     | Test class final.
     |
     | Tells if the test class should be final.
     |--------------------------------------------------------------------------
     */
    'testClassFinal'           => true,

    /*
     |--------------------------------------------------------------------------
     | Test class strict types.
     |
     | Tells if the test class should declare strict types.
     |--------------------------------------------------------------------------
     */
    'testClassStrictTypes'     => false,

    /*
     |--------------------------------------------------------------------------
     | Test class typed properties.
     |
     | Tells if the test class properties should be typed or documented.
     |--------------------------------------------------------------------------
     */
    'testClassTypedProperties' => true,

    /*
     |--------------------------------------------------------------------------
     | Excluded methods.
     |
     | Those methods will not have tests or skeleton generation. This must be an
     | array of RegExp compatible with "preg_match", but without the opening and
     | closing "/", as they will be added automatically.
     |--------------------------------------------------------------------------
     */
    'excludedMethods'          => [
        '__construct',
        '__destruct',
    ],

    /*
     |--------------------------------------------------------------------------
     | Merged PHP documentation tags.
     |
     | Those tags will be retrieved from tested class documentation, and appends
     | to the test class documentation.
     |--------------------------------------------------------------------------
     */
    'mergedPhpDoc'             => [
        'author',
        'copyright',
        'license',
        'version',
    ],

    /*
     |--------------------------------------------------------------------------
     | PHP documentation lines.
     |
     | Those complete documentation line (such as "@author John Doe") will be
     | added to the test class documentation.
     |--------------------------------------------------------------------------
     */
    'phpDoc'                   => [],

    /*
     |--------------------------------------------------------------------------
     | PHP header documentation lines.
     |
     | The documentation header to append to generated files.
     | Should be a full documentation content (with lines breaks, opening tags,
     | etc.) or an empty string to disable printing a documentation header.
     |--------------------------------------------------------------------------
     */
    'phpHeaderDoc'             => '',

    /*
     |--------------------------------------------------------------------------
     | Options.
     |
     | This property is for generator's specific configurations. It might
     | contains any other useful information for test generation.
     |--------------------------------------------------------------------------
     */
    'options'                  => [
        /*
         |----------------------------------------------------------------------
         | Context.
         |
         | Tells the DelegateTestGenerator (default one) that we are in a
         | specific project context. If defined to "null", it will used basic
         | generators. If set to "laravel", it will use the Laravel tests
         | generators.
         |----------------------------------------------------------------------
         */
        'context' => 'laravel',

        /*
         |----------------------------------------------------------------------
         | Laravel Options.
         |
         | Those options are used by Laravel Test Generators and are nested in
         | a "laravel." namespace.
         |  - "user" is the class of User Eloquent model, since it will be used
         |    in many tests.
         |----------------------------------------------------------------------
         */
        // 'laravel.user' => 'App\\User',
    ],
];
