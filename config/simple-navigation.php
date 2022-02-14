<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Navigation elements
    |--------------------------------------------------------------------------
    |
    | This value defines all the elements which should be rendered in the
    | navigation.
    | You can define several navigations like main and footer navigation.
    |
    */

    'elements' => [
        'main' => [
            [
                'href' => '/index.html',
                'name' => 'Home',
            ],
            [
                'href' => '/about-us.html',
                'name' => 'About us',
            ],
        ],
        'footer' => [
            [
                'href' => '/imprint.html',
                'name' => 'Imprint'
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Current class
    |--------------------------------------------------------------------------
    |
    | This value defines the CSS class which will be added to current element
    | in the navigation.
    |
    */

    'current_class' => 'current',

    /*
    |--------------------------------------------------------------------------
    | Current path class
    |--------------------------------------------------------------------------
    |
    | This value defines the CSS class which will be added to current path
    | element in the navigation.
    |
    */

    'current_path_class' => 'current-path',

    /*
    |--------------------------------------------------------------------------
    | Nav class
    |--------------------------------------------------------------------------
    |
    | This value defines the CSS class which will be added to the navigation.
    |
    */

    'nav_class' => 'nav',

];
