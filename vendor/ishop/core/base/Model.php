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

    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }
}
