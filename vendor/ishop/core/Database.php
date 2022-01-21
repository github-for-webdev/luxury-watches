<?php

namespace ishop;

class Database {

    use TSingletone;
    
    protected function __construct() {
        $db = require_once CONF . '/config_db.php';
    }

}