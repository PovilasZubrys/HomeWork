<?php
namespace Sodas;

use Cucumber\Agurkas;
use Tomato\Pomidoras;
use Plants\Augalai;

class App {

    // Router
    public static function route() {
    
        $uri = str_replace(INSTALL_FOLDER, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri); // <<< Masyvas su duomenimis iš uri eilutės

        if ('sodinimas' == $uri[0]) {
            include DIR.'/sodinimas.php';
        } elseif ('auginti' == $uri[0]) {
            include DIR.'/auginti.php';
        } elseif ('sodas' == $uri[0]) {
            include DIR.'/sodas.php';
        }
    }

    public static function redirect($link) {
        header('Location: '.URL.$link);
        exit;
    }
}