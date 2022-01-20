<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction() {
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        // $this->set(compact());
    }

}