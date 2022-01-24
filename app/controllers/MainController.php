<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction() {
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'value_name';
        $age = 'value_age';
        $names = ['value_name(1)', 'value_name(2)'];
        $cache = Cache::instance();
        // $cache->set('test', $names);
        // $cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }

}