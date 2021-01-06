<?php

class Lape extends Miskas{
    protected $name = 'Lape';
    protected $type = 'Mesedis';
    protected $voice = 'Woof woof';
    
    public function makeNoise() {
        echo '<h1 style="color: red;">'.$this->voice.'</h1>';
    }
}