<?php 

// Planas
class Nso {
    private $ufoCount = 2;
    protected $color = 'black';
    private $tail = false;
    
    public function __construct($color = null) {
        // $this->color = $this->color.rand(1, 9);

        $this->color = $color ?? $this->color;
        echo 'Hello from constructor';
    }

    public function addOneUfo() {
        $this->ufoCount++;    
    }
    public function setUfo(int $ufoCount) { // Seteris
        if (!is_integer($ufoCount)) {
            echo 'Bloga info, UFO tik integer!';
            exit;
        }
        $this->ufoCount = $ufoCount;
    }
    public function getUfo() { // Geteris
        
        return $this->ufoCount + 6;
    }
    public function removeMoreUfo($ufo) {
        $this->ufoCount = $this->ufoCount - $ufo;
    }
}

// Gamyba
$ufo1 = new Nso('yellow');
$ufo2 = new Nso;
$ufo3 = new Nso;

// // Tyrimas
echo '<pre>';
var_dump($ufo1);
var_dump($ufo2);
var_dump($ufo3);
// $ufo1->setUfo(6);
// $ufo1->addOneUfo();
// $ufo1->removeMoreUfo(1);
// echo $ufo1->getUfo();