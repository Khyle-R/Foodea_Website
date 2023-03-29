<?php

return [
    'api_key' => env('SENDGRID_API_KEY'),
    'from' => [
        'address' => env('SENDGRID_SENDER_ADDRESS', 'no-reply@foodea.com'),
        'name' => env('SENDGRID_SENDER_NAME', 'Foodea'),
    ],
];
