<?php

    return [
        'accounts' => [
            'noreply' => [
                'username' => 'noreply@wedevelop4you.nl',
                'password' => env('MAIL_NOREPLY_PASSWORD'),
            ]
        ],

        'provider' => [
            'default' => [
                'transport' => 'smtp',
                'host' => env('MAIL_HOST'),
                'port' => env('MAIL_PORT'),
                'encryption' => env('MAIL_ENCRYPTION'),
                'timeout' => null,
                'auth_mode' => null,
            ],
        ]
    ];
