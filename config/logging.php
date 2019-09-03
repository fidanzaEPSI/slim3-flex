<?php

use Monolog\Logger;

return [
    'log' => [
        'name' => 'app',
        'path' => base_path('storage/logs/app.log'),
        'level' => Logger::DEBUG
    ]
];
