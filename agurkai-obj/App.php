<?php

class App {

    public static function isSetSession() {

        if(!isset($_SESSION['augalas'])) {
            $_SESSION['augalas'] = []; // Agurku objektai
            $_SESSION['augalasID'] = 0;
        }
    }

    public static function newAgurkas() {

        $agurkoObj = new Agurkas($_SESSION['augalasID']);
        $_SESSION['augalasID']++;
        $_SESSION['augalas'][] = serialize($agurkoObj);
    }

    public static function newPomidoras() {

        $pomidoroObj = new Pomidoras($_SESSION['augalasID']);
        $_SESSION['augalasID']++;
        $_SESSION['augalas'][] = serialize($pomidoroObj);
    }

    public static function redirect($link) {
        header("Location: http://localhost/HomeWork/agurkai-obj/$link.php");
        exit;
    }

    public static function rauti() {
        foreach ($_SESSION['augalas'] as $index => $augalas) {
            $augalas = unserialize($augalas);
            if($_POST['rauti'] == $augalas->id) {
                unset($_SESSION['augalas'][$index]);
            }
        }
    }
}