<?php

return [

    'stageEnv' => env('GLOVO_STAGE_ENV', true),

    'max_retries' => 3,

    'auth' => [
        'clientId' => env('GLOVO_CLIENT_ID'),
        'clientSecret' => env('GLOVO_CLIENT_SECRET'),
    ],

];
