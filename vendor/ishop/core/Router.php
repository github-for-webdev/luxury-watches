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
            echo $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
        } else {
            throw new \Exception("Страница не найдена", 404);
        }
    }

    public static function matchRoute($url) {
        foreach(self::$routes as $pattern => $route) {
            if (preg_match("#($pattern)#", $url, $matches)) {
                foreach($matches as $key => $value) {
                    if (is_string($key)) {
                        $route[$key] = $value;
                    }
                }
                if (empty($route['action'])) {
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                self::$route = $route;
                debug(self::$route);
                return true;
            }
        }
        return false;
    }

}