<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'pengurus',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'pengurus',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'pengurus',
            'hash' => false,
        ],
    ],

    'providers' => [
        'pengurus' => [
            'driver' => 'eloquent',
            'model' => App\Models\Pengurus::class,
        ],
    ],

    'passwords' => [
        'pengurus' => [
            'provider' => 'pengurus',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
