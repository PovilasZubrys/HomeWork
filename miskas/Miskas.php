<?php

class Miskas {
    private $area = 1000;
    protected $animals = 0;
    protected $name = 'Gyvulys';

    public function makeNoise() {
        echo '<h1>'.$this->voice.'</h1>';
    }
    public function getArea() {
        return $this->area;
    }
}