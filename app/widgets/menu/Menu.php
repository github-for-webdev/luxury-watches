<?php

namespace app\widgets\menu;

class Menu {

    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container = 'ul';
    protected $table = 'category';
    protected $cache = 3600;
    protected $cacheKey = 'ishop/menu';
    protected $attrs = [];
    protected $prepend = '';

    public function __construct($options = []) {
        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
        debug($this->table);
        $this->run();
    }

    protected function getOptions($options) {
        foreach($options as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    protected function run() {
        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);
        if (!$this->menuHtml) {
            
        }
        $this->output();
    }

    protected function output() {
        echo $this->menuHtml();
    }

}