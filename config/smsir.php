<?php

// config file for laravelir/smsir
return [
    'drivers' => [
        'default' => env('SMSIR_DRIVER'),

        'kavenegar' => [],

        'raygansms' => [
            'username' => '',
            'password' => '',
        ],

        'melipayamak' => [
            'username' => '',
            'password' => '',
        ],

        'farapayamak' => [],

        'ghasedak' => [],

        'mediana' => [],

        'saharsms' => [],
    ],
];
