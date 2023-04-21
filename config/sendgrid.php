<?php

return [
    'api_key' => env('SENDGRID_API_KEY'),
    'from' => [
        'address' => env('SENDGRID_SENDER_ADDRESS', 'noreply@gmail.com'),
        'name' => env('SENDGRID_SENDER_NAME', 'Foodea'),
    ],
];