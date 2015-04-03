<?php
/*
|--------------------------------------------------------------------------
| Prettus Request Logger Config
|--------------------------------------------------------------------------
|
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Request
    |--------------------------------------------------------------------------
    |
    */
    'request' => [
        'enabled' => true,
        'format'  => '[{method}] {fullUrl} {ip} {port}'
    ],

    /*
    |--------------------------------------------------------------------------
    | Response
    |--------------------------------------------------------------------------
    |
    */
    'response' => [
        'enabled' => true,
        'format'  => '[{status_code}] {protocol_version} {content}'
    ]
];