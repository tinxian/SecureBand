<?php

$config = [
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => 'c3680myband',
    'DB_USER' => 'c3680myband',
    'DB_PASSWORD' => 'root123',
    'BASE_URL' => '/myband/public',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
];

return $config;
