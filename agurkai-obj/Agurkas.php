<?php

class Agurkas {

    private $id, $count, $img;

    public function __construct($id) {
        $this->id = $id + 1;
        $this->img = rand(1, 5);
        $this->count = 0;
    }
    public static function skintiDerliu($visasDerlius) { // <<< $visiAgurkai = $_SESSION['obj]
        foreach ($visasDerlius as $key => $agurkas) {
            $agurkas = unserialize($agurkas);
            $agurkas->nuskintiVisus();
            $agurkas = serialize($agurkas);
            $visasDerlius[$key] = $agurkas;
        }
        return $visasDerlius;
    }
    public function __get($propertyName) {
        return $this->$propertyName;
    }

    public function __set($propertyName, $value) {
        $this->$propertyName = $value;
    }

    public function addAgurkas($agurkai){
        $this->count = $this->count + $agurkai;
    }
    public function skintiAgurkus($agurkai) {
        $this->count = $this->count - $agurkai;
    }
    public function skintiVisus($agurkai) {
        $this->count -= $this->count;
    }
    public function nuskintiVisus(){
        $this->count = 0;
    }

    // Visai nebutina
    // public function __serialize() // <---- ivyksta kai objektas yra serializuojamas
    // {

    // }
}