<?php

class Agurkas {
    
    private $id, $count;

    public function __get($propertyName) {
        return $this->$propertyName;
    }

    public function __set($propertyName, $value) {
        $this->$propertyName = $value;
    }
    // Nebūtina
    // public function __serialize() {  // <<< įvyksta kai objektas serializuojamas

    // }
}