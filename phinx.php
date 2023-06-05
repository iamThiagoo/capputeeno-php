<?php

require_once './bootstrap.php';

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeders'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => $_ENV['DB_DRIVER_PROD'],
            'host' => $_ENV['DB_HOST_PROD'],
            'name' => $_ENV['DB_DATABASE_PROD'],
            'user' => $_ENV['DB_USER_PROD'],
            'pass' => $_ENV['DB_PASS_PROD'],
            'port' => $_ENV['DB_PORT_PROD'],
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => $_ENV['DB_DRIVER'],
            'host' => $_ENV['DB_HOST'],
            'name' => $_ENV['DB_DATABASE'],
            'user' => $_ENV['DB_USER'],
            'pass' => $_ENV['DB_PASS'],
            'port' => $_ENV['DB_PORT'],
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => $_ENV['DB_DRIVER'],
            'host' => $_ENV['DB_HOST'],
            'name' => $_ENV['DB_DATABASE'],
            'user' => $_ENV['DB_USER'],
            'pass' => $_ENV['DB_PASS'],
            'port' => $_ENV['DB_PORT'],
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
