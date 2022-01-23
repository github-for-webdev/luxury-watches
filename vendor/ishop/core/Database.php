<?php

namespace ishop;

class Database {

    use TSingletone;
    
    protected function __construct() {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if ( !\R::testConnection() ) {
            throw new \Exception("Нет соединения с базой данных", 500);
        } else {
            echo "Соединение установлено!";
        }
    }

}