<?php

class Pomidoras extends Augalai {

    private $id, $count, $img;

    public function __construct($id) {
        $this->id = $id + 1;
        $this->img = rand(1, 5);
        $this->count = 0;
    }
    public function __get($propertyName) {
        return $this->$propertyName;
    }

    public function __set($propertyName, $value) {
        $this->$propertyName = $value;
    }

    public function addPomidoras($pomidorai){
        $this->count = $this->count + $pomidorai;
    }
    public function skintiPomidorus($pomidorai) {
        $this->count = $this->count - $pomidorai;
    }
    public function augti(){
        return rand(1, 9);
    }
}