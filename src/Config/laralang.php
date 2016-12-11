<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default settings for laralang
    |--------------------------------------------------------------------------
    */
    'default'   => [
        'autosave'       => true,
        'debug'          => false,
        'routes'         => true,
        'prefix'         => 'laralang',
        'password'       => 'laralangAdmin',
        'translator'     => 'google',
        'from_lang'      => 'en',
        'to_lang'        => 'app_locale',
        'middleware'     => Aitor24\Laralang\Middleware\LaralangMiddleware::class,
    ],
];
