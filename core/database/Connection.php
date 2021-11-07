<?php

class Connection
{
    public static function make($config)
    {
        try {
//            return new PDO("mysql:host=192.168.10.10;dbname={$config['name']}", 'homestead', 'secret');

            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']

            );

        } catch (PDOException $exception) {
            die('error occurred:' . $exception);
        }
    }
}

