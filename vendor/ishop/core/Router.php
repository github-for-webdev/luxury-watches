<?php

namespace ishop;

class Router {

    protected static $routes = [];
    protected static $route = [];

    public static function add($regular_expression, $route = []) {
        self::$routes[$regular_expression] = $route;
    }

    public static function getRoutes() {
        return self::$routes;
    }

    public static function getRoute() {
        return self::$route;
    }

    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            echo 'Yes';
        } else {
            echo 'No';
        }
    }

    public static function matchRoute($url) {
        return false;
    }

}