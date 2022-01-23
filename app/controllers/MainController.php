<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction() {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');

        $name = 'value_name';
        $age = 'value_age';
        $names = ['value_name(1)', 'value_name(2)'];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }

}