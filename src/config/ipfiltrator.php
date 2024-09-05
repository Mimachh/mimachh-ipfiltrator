<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Enable IP Filtration
    |--------------------------------------------------------------------------
    |
    | This option controls whether the IP filtration middleware is enabled for the application.
    | 
    */
    'enable' => env('APP_ENV') === 'production' && env('IP_FILTRATION_ENABLE', false),

    /*
    |--------------------------------------------------------------------------
    | Authorized IP List
    |--------------------------------------------------------------------------
    |
    | This array regroup all the IP Address on Whitelist
    | 
    */
    'whitelist' => [
        "127.0.0.1"
    ]

];
