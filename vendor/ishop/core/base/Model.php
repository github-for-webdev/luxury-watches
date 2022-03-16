<?php

namespace ishop\base;

use ishop\Database;

abstract class Model
{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Database::instance();
    }
}
