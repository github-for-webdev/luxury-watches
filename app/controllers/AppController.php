<?php

namespace app\controllers;

use ishop\base\Controller;

class AppController extends Controller {
    
    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
    }

}