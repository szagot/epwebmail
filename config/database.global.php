<?php
/**
 * Configuração de conexão ao BD
 */

return [
    'driver'        => 'pdo_mysql',
    'charset '      => 'utf8',
    'driverOptions' => [
        1002 => "SET NAMES 'UTF8'",
    ],
    'dbname'        => 'webmail',
    'host'          => 'localhost',
    'user'          => 'user',
    'password'      => 'pass',
];