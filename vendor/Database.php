<?php

function initDatabase(&$app) {
    $host = '127.0.0.1';
    $port = '3306';
    $user = 'MBZ8LgAuwE6fy';
    $password = 'LuTA3eAwkNCMBk9MW';
    $database = 'rally8';

    $app->register(new Silex\Provider\DoctrineServiceProvider(), array(
        'db.options' => array(
            'driver' => 'pdo_mysql',
            'dbname' => $this->$database,
            'host' => $this->$host,
            'password' => $this->$password,
            'user' => $this->$user,
            'port' => $this->$port
        ),
    ));
}