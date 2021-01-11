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

    public static function augintiAgurkas($augalas) {
        $augalas->addAgurkas($_POST['kiekis'][$augalas->id]); // << Pridedam agurka
    }

    public static function augintiPomidoras($augalas) {
        $augalas->addPomidoras($_POST['kiekis'][$augalas->id]); // << Pridedam pomidora
    }

    public static function skintiKiekAgurku($augalas) {
        $augalas->skintiAgurkus($_POST['skinam'][$augalas->id]);
    }

    public static function skintiKiekPomidoru($augalas) {
        $augalas->skintiPomidorus($_POST['skinam'][$augalas->id]);
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

    public static function saugoti($index, $augalas) {
        $augalas = serialize($augalas); // << vel stringas
        $_SESSION['augalas'][$index] = $augalas; // << issaugom agurkus
    }

    public static function auginti() {
        foreach($_SESSION['augalas'] as $index => $augalas) { // << Serializacijos stringas
            $augalas = unserialize($augalas); // << agurko objektas
        if ($augalas instanceof Agurkas) {
            self::augintiAgurkas($augalas);
        } else {
            self::augintiPomidoras($augalas);
        }
        self::saugoti($index, $augalas);
        }
    }

    public static function skinti() {
        foreach($_SESSION['augalas'] as $index => $augalas) {
    
            $augalas = unserialize($augalas);

            if ($augalas instanceof Agurkas) {

                self::skintiKiekAgurku($augalas);
                self::saugoti($index, $augalas);

            } elseif ($augalas instanceof Pomidoras) {

                self::skintiKiekPomidoru($augalas);
                self::saugoti($index, $augalas);

            }
        }
    }

    public static function skintiVisus() {
        foreach($_SESSION['augalas'] as $index => $augalas) {
            $augalas = unserialize($augalas);

            if ($_POST['skintiVisus'] == $augalas->id) {
            
                $augalas->skintiVisus();
                self::saugoti($index, $augalas);
            }
        }
    }
    public static function skintiVisaDerliu() {
        $_SESSION['augalas'] = Augalai::skintiDerliu($_SESSION['augalas']);
    }
}