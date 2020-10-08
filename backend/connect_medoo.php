<?php

require_once 'Medoo.php';

use Medoo\Medoo;

if ((substr($_SERVER['REMOTE_ADDR'], 0, 8) == "192.168.") || ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") || ($_SERVER['REMOTE_ADDR'] == '::1')) {
    // client is local

    $database = new Medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'rent_erp',
        'server' => 'test',
        'username' => 'test',
        'password' => 'test',

        // [optional]
        'charset' => 'utf8',
        'port' => 'test',


        // [optional] Enable logging (Logging is disabled by default for better performance)
        'logging' => true,


    ]);
} else {
    // client is not local

    $database = new Medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'rent_erp',
        'server' => 'test',
        'username' => 'test',
        'password' => 'test#',

        // [optional]
        'charset' => 'utf8',
        'port' => 'test',


        // [optional] Enable logging (Logging is disabled by default for better performance)
        'logging' => true,


    ]);
}

?>