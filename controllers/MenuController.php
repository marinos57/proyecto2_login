<?php

namespace Controllers;

use MVC\Router;

class MenuController {

    public static function index(Router $router)
    {        
        if ($_SESSION['auth_user'] != "") {
            $router->render('menu/index', []);
        } else {
            $router->render('login/index', []);
        }
    }
    public static function closeSessionAPI() {
       unset($_SESSION['auth_user']);
    }

}