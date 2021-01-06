<?php

class Agurkas {

    public $id, $count, $img;

    public function __construct($id) 
    {
        $this->id = $id + 1;
        // $this->img = rand(1, 5);
        $this->count = 0;
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

    public function nuskintiVisus()
    {
        $this->count = 0;
    }

    // Visai nebutina
    // public function __serialize() // <---- ivyksta kai objektas yra serializuojamas
    // {

    // }



}