<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Root path where theme Views will be located.
    | Can be outside default views path EG: resources/themes
    | Leave it null if you will put your themes in the default views folder 
    | (as defined in config\views.php)
    |--------------------------------------------------------------------------
    */

    'themes_path' => base_path('Themes'), // eg: base_path('resources/themes')

    /*
    |--------------------------------------------------------------------------
    | Set behavior if an asset is not found in a Theme hierarcy.
    | Available options: THROW_EXCEPTION | LOG_ERROR | IGNORE
    |--------------------------------------------------------------------------
    */

    'asset_not_found' => 'LOG_ERROR',

    /*
    |--------------------------------------------------------------------------
    | Do we want a theme activated by default? Can be set at runtime with:
    | Theme::set('theme-name');
    |--------------------------------------------------------------------------
    */

    'default' => 't1',

    /*
    |--------------------------------------------------------------------------
    | Cache theme.json configuration files that are located in each theme's folder
    | in order to avoid searching theme settings in the filesystem for  each request
    |--------------------------------------------------------------------------
    */

    'cache' => true,

    /*
    |--------------------------------------------------------------------------
    | Define available themes. Format:
    |
    | 	'theme-name' => [
    | 		'extends'	 	=> 'theme-to-extend',  // optional
    | 		'views-path' 	=> 'path-to-views',    // defaults to: resources/views/theme-name
    | 		'asset-path' 	=> 'path-to-assets',   // defaults to: public/theme-name
    |
    |		// You can add your own custom keys
    |		// Use Theme::getSetting('key') & Theme::setSetting('key', 'value') to access them
    | 		'key' 			=> 'value',
    | 	],
    |
    |--------------------------------------------------------------------------
    */

    'themes' => [

        'default' => [
            'extends' => null,
            'views-path' => '',
            'asset-path' => '',
        ],

        // Add your themes here...

        't1' => [
            'views-path' => 't1', // = resources/views/t1
            'asset-path' => 'public/themes/t1', // = public/themes/t1
        ],
        't2' => [
            'views-path' => 't2', // = resources/views/t2
            'asset-path' => 'public/themes/t2', // = public/themes/t2
        ],
        't3' => [

            'views-path' => 't3', // = resources/views/t3
            'asset-path' => 'public/themes/t3', // = public/themes/t3

        ],
    ],

];