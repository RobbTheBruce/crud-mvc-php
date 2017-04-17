<?php

namespace app\lib;

use Route66 as R;

class Router {

    public function __construct() {
        R::any('/(@controller(/@view(/@id)))', function($controller = null, $view = null, $id = null) {
            $this->head(array('controller' => $controller, 'view' => $view, 'id' => $id));
        });

        R::dispatch();
    }

    function head(Array $route) {
        if ($route['controller'] != NULL) {
            $controller = "\\app\controller\\" . $route['controller'] . 'Controller';
        } else {
            $controller = "\\app\controller\\IndexController";
        }

        if (class_exists($controller)) {
            $obj = new $controller(array('view'=>$route['view'], 'id' => $route['id']));
        } else {
            header('HTTP/1.0 404 Not Found');
            include './public/template/404.php';
            exit();
        }
    }

}
